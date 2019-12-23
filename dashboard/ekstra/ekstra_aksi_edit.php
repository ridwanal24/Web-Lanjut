<?php ob_start();
include "koneksi.php";
$id = $_POST['idEkstra'];
$nama     	= $_POST['nama'];
$deskripsi        = $_POST['deskripsi'];

$query=mysql_query("UPDATE ekstra SET nama='$nama', deskripsi='$deskripsi' WHERE idEkstra=$id");
{
			echo '<script language="javascript">
				  alert ("Data Berhasil Diupdate");
				  window.location="ekstra_data.php";
				  </script>';
				  //exit();
	}
?>

