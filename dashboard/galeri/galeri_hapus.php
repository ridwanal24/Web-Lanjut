<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from galeri where idGaleri='$_GET[idGaleri]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="galeri_data.php";
 	</script>';
 	exit();
 }
 ?>