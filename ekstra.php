<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';

$query="select * from fasilitas";
$aksi=mysql_query($query);
?>

<!-- Page Content -->
<div class="container">
<br>
<p class="h1 text-center">EKSTRAKURIKULER</p>
<br>
</div>


<?php
include 'layout/footer.php';
?>
