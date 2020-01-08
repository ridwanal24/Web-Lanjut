 <?php ob_start();
 include "koneksi.php";
 $nip = $_GET['nip'];
 mysql_query("delete from guru where nip=$nip");
 $file = "../../assets/img/guru/".$nip.".png";
 if (file_exists($file)) {
 	unlink($file);
 }
 {
 	echo '<script language="javascript">
	 alert ("Data Guru Berhasil Dihapus");
	 window.location="guru_data.php";
 	</script>';
 	exit();
 }
 ?>

