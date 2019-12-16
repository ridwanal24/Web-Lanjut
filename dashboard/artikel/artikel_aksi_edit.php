<?php ob_start();
include "koneksi.php";
$judul          = $_POST['judul'];
$pathText     	= $_POST['pathText'];
$pathImg        = $_POST['pathImg'];

$query=mysql_query("UPDATE artikel SET judul='$judul', video='$pathVideo', gbr='$pathImg' WHERE id=$id");
{
			echo '<script language="javascript">
				  alert ("Artikel Berhasil Diupdate");
				  window.location="artikel_data.php";
				  </script>';
				  //exit();
	}
?>

