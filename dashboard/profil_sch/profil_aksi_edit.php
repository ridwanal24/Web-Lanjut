<?php ob_start();
include "koneksi.php";
$id = $_POST['idProfil'];
$nip     	= $_POST['nip'];

$query=mysql_query("UPDATE ekstra SET nip='$nip' WHERE idProfil=$id");
{
			echo '<script language="javascript">
				  alert ("Data Berhasil Diupdate");
				  window.location="profil_data.php";
				  </script>';
				  //exit();
	}
?>

