<?php
$host=mysql_connect("localhost","root","");

if ($host) {
	# code...
	echo "Sukses Konek";
}

$db=mysql_select_db("db_sekolahmu");

if ($db) {
	# code...
	echo "Sukses db";
}

?>