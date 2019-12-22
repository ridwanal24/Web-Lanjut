<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from ekstra where idEkstra='$_GET[idEkstra]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Berhasil Dihapus");
 	window.location="ekstra_data.php";
 	</script>';
 	exit();
 }
 ?>