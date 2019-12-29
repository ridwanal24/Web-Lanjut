 <?php ob_start();
include "koneksi.php";
$fasilitas          	= $_POST['fasilitas'];
$pass 			    = $_POST['pass'];


$query=mysql_query("UPDATE admin SET username='$username', pass='$pass' WHERE username='$username'");
{
			echo '<script language="javascript">
				  alert ("Data Admin Berhasil Diupdate");
				  window.location="admin_data.php";
				  </script>';
				  //exit();
	}
?>

