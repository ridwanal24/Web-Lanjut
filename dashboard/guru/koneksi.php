<?php
$server= "localhost";
$username = "root";
$password = "";
$database = "db_guru";

mysql_connect($server,$username,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );
?>