<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from fasilitas where idFasilitas=$_GET[idFasilitas]");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="fasilitas_data.php";
 	</script>';
 	exit();
 }
 ?>

