<?php
	include '../koneksi.php';
	$query = "select max(nis) as nis FROM siswa";
	$action = mysql_query($query);
	while ($data=mysql_fetch_array($action)) {
	    $nis = $data['nis']+1;
	}
?>