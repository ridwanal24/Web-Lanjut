<?php
include 'koneksi.php';
if (isset($_GET['submit'])) {
	 $query="insert into kritiksaran(nama,isi) values ('".$_GET['nama']."','".$_GET['kritik_saran']."')";
	 $action=mysql_query($query);

	 if ($action) {
	 	echo "Sukses";
	 	echo '<script language="javascript">
    	alert ("Kritik / Saran Telah terkirim");
    	window.location="kritik_saran.php";
    	</script>';
    	exit();
	 }
}
?>