 <?php ob_start();
 include "koneksi.php";
 $nis = $_GET['nis'];
 mysql_query("delete from siswa where nis=$nis");
 $file = "../../assets/img/siswa/".$nis.".png";
 if (file_exists($file)) {
 	unlink($file);
 }
 {
 	echo '<script language="javascript">
 	alert ("Data Guru Berhasil Dihapus");
 	
 	</script>';
 	exit();
 }/*window.location="siswa_data.php";*/
 ?>

