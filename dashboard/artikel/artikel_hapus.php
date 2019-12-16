<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from artikel where idArtikel='$_GET[idArtikel]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="artikel_data.php";
 	</script>';
 	exit();
 }
 ?>