 <?php ob_start();
include "koneksi.php";

$image   = $_FILES['image']['name'];

// Apabila gambar tidak diganti
if (empty($image)){
    $query=mysql_query("UPDATE guru SET 
                        nip = '$_POST[nip]',
                        nama_guru = '$_POST[nama_guru]',
    					tempat_lahir     = '$_POST[tempat_lahir]',
                        tanggal_lahir    = '$_POST[tanggal_lahir]',
						jenis_kelamin    = '$_POST[jenis_kelamin]',
						agama    = '$_POST[agama]',
						alamat    = '$_POST[alamat]',
						kode_jabatan    = '$_POST[kode_jabatan]'
                    WHERE nip = '$_POST[nip]'");
  }else{

    $hapus= mysql_query("select*from guru where nip='$_POST[nip]'");
    // menghapus gambar yang lama
    $nama_gambar=mysql_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['image'];
    // alamat tempat foto
    $hapus_gambar="assets/img/guru/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/guru/'.$image);
    $query=mysql_query("UPDATE guru SET 
                        nip = '$_POST[nip]',
                        nama_guru = '$_POST[nama_guru]',
    					tempat_lahir     = '$_POST[tempat_lahir]',
                        tanggal_lahir    = '$_POST[tanggal_lahir]',
						jenis_kelamin    = '$_POST[jenis_kelamin]',
						agama    = '$_POST[agama]',
						alamat    = '$_POST[alamat]',
						kode_jabatan    = '$_POST[kode_jabatan]'
                        image  = '$image'
                    WHERE nip = '$_POST[nip]'");
  }
  
    {
			echo '<script language="javascript">
				  alert ("Data Guru Berhasil Diupdate");
				  window.location="guru_data.php";
				  </script>';
				  exit();
	}
?>

