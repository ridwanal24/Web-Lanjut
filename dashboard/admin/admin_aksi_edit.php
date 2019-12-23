 <?php ob_start();
include "koneksi.php";
$username          	= $_POST['username'];
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

