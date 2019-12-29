<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';

$idArtikel=$_GET['idArtikel'];

$query="select judul,text from artikel where idArtikel=$idArtikel";
$tampil=mysql_query($query);
$result=mysql_fetch_array($tampil)
?>

<br>
<div class="container-fluid">
	<p class="h1 text-center" ><?php echo $result['judul'];?></p>
	<br>
<div class="row">
	<div class="col-md-12"></div>
		<div class="row py-1">
				<div class="col-md-11"><?php echo $result['text']; ?></div>
		</div>
	<div class="col-md-3"></div>
					
</DIV>		
<br>
<br>
	<center><a class="btn btn-dark text-light" href="artikel.php">Kembali</a></center>
</div>

<br>
<br>
<br>
<?php

include 'layout/footer.php';
?>