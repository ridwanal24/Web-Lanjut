<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from profilsekolah where idProfil='$_GET[idProfil]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="profil_data.php";
 	</script>';
 	exit();
 }
 ?>