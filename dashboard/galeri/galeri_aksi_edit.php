<?php ob_start();
include "koneksi.php";
$pathVideo     	= $_POST['pathVideo'];
$pathImg        = $_POST['pathImg'];

$query=mysql_query("UPDATE galeri SET video=$pathVideo, gbr='$pathImg' WHERE id=$id");
{
			echo '<script language="javascript">
				  alert ("Data Berhasil Diupdate");
				  window.location="galeri_data.php";
				  </script>';
				  //exit();
	}
?>

