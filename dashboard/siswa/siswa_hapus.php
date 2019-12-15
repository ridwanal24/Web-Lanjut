 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from guru where nip='$_GET[nis]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Guru Berhasil Dihapus");
 	window.location="guru_data.php";
 	</script>';
 	exit();
 }
 ?>

