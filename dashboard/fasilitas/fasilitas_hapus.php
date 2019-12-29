 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from admin where username='$_GET[username]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Admin Berhasil Dihapus");
 	window.location="admin_data.php";
 	</script>';
 	exit();
 }
 ?>

