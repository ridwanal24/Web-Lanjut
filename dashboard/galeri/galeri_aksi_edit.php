<?php ob_start();
include "koneksi.php";
$pathImg  = "no";

if ($_FILES['file']['size']>0) {
	echo 'true';
	if (file_exists('../../assets/img/galeri/'.$idGaleri.'.png')) {
		unlink('../../assets/img/galeri/'.$idGaleri.'.png');
	}

	/*Upload Gambar*/
	$ekstensi_diperbolehkan = array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 5044070){          
			move_uploaded_file($file_tmp, '../../assets/img/galeri/'.$idGaleri.'.jpg');
			$img = "yes";
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}
/*End of Upload Gambar*/


$query=mysql_query("UPDATE galeri SET gbr='$pathImg' WHERE id=$id");
{
			echo '<script language="javascript">
				  alert ("Data Berhasil Diupdate");
				  window.location="galeri_data.php";
				  </script>';
				  //exit();
	}
?>

