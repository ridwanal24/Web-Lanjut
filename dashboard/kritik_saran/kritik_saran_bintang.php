<?php
include 'koneksi.php';
echo $_GET['idKritik'];
$query = "update kritiksaran set bintang='".$_GET['bintang']."' where idkritik=".$_GET['idKritik'];
$action = mysql_query($query);
header("location:kritik_saran_show.php?idKritik=".$_GET['idKritik']);
?>