<?php ob_start();
include "koneksi.php";
$judul          = $_POST['judul'];
$pathText     	= $_POST['pathText'];
$pathImage        = $_POST['pathImage'];

$query=mysql_query("UPDATE artikel SET judul='$judul', video='$pathVideo', gbr='$pathImage' WHERE id=$id");
{
			echo '<script language="javascript">
				  alert ("Artikel Berhasil Diupdate");
				  window.location="artikel_data.php";
				  </script>';
				  //exit();
	}
?>

