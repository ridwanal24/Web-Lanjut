<?php
session_start();
include 'koneksi.php';
if (isset($_GET['submit'])) {
	if (isset($_SESSION['status'])) {
		$status=$_SESSION['status'];
	}else{
		$status="Pengunjung";
	}
	 $query="insert into kritiksaran(nama,isi,date,status) values ('".$_GET['nama']."','".$_GET['kritik_saran']."','".date("Y-m-d H:i:sq")."','".$status."')";
	 $action=mysql_query($query);

	 if ($action) {
	 	echo '<script language="javascript">
    	alert ("Kritik / Saran Telah terkirim");
    	window.location="kritik_saran.php";
    	</script>';
    	exit();
	 }
}
?>