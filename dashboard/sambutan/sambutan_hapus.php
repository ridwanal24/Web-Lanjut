<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from sambutan where idSambutan='$_GET[idSambutan]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="sambutan_data.php";
 	</script>';
 	exit();
 }
 ?>