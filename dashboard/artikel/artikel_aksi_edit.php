<?php ob_start();
include "koneksi.php";
$judul          = $_POST['judul'];
$text     	= $_POST['text'];
$pathImage      = $_POST['pathImage'];

$query=mysql_query("UPDATE artikel SET judul='$judul', text='$text', gbr='$pathImage' WHERE id=$id");
{
			echo '<script language="javascript">
				  alert ("Artikel Berhasil Diupdate");
				  window.location="artikel_data.php";
				  </script>';
				  //exit();
	}
?>

