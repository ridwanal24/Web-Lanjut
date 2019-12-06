<?php
$host=mysql_connect("localhost","root","") or die(mysql_error());

if ($host) {
	# code...
//	echo "Sukses Konek";
}

$db=mysql_select_db("db_sekolahmu") or die(mysql_error());

if ($db) {
	# code...
//	echo "Sukses db";
}

?>