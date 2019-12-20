 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from siswa where nis='$_GET[nis]'");
 {
 	echo '<script language="javascript">
 	alert ("Data Guru Berhasil Dihapus");
 	window.location="siswa_data.php";
 	</script>';
 	exit();
 }
 ?>

