<?php
include 'koneksi.php';
if (isset($_GET['submit'])) {
	 $query="insert into kritiksaran(nama,isi,date) values ('".$_GET['nama']."','".$_GET['kritik_saran']."','".date("Y-m-d H:i:sq")."')";
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