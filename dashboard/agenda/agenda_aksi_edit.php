 <?php ob_start();
include "koneksi.php";


$image   = $_FILES['image']['name'];

// Apabila gambar tidak diganti
if (empty($image)){
    $query=mysql_query("UPDATE agenda SET 
                        id_agenda = '$_POST[id_agenda]',
                        kategori = '$_POST[kategori]',
    					title     = '$_POST[title]',
                        descp    = '$_POST[descp]'
                    WHERE id_agenda = '$_POST[id_agenda]'");
  }else{

    $hapus= mysql_query("select*from agenda where id_agenda='$_POST[id_agenda]'");
    // menghapus gambar yang lama
    $nama_gambar=mysql_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['image'];
    // alamat tempat foto
    $hapus_gambar="images/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$image);
    $query=mysql_query("UPDATE agenda SET 
                        id_agenda = '$_POST[id_agenda]',
                        kategori = '$_POST[kategori]',
    					title     = '$_POST[title]',
                        descp    = '$_POST[descp]',
                        image  = '$image'
                    WHERE id_agenda = '$_POST[id_agenda]'");
  }
  
    {
			echo '<script language="javascript">
				  alert ("Data Agenda Berhasil Diupdate");
				  window.location="agenda_data.php";
				  </script>';
				  exit();
	}
?>

