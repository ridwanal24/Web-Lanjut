<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';

$idEkstra=$_GET['idEkstra'];

$query="select nama,deskripsi from ekstra where idEkstra=$idEkstra";
$tampil=mysql_query($query);
$result=mysql_fetch_array($tampil)
?>

<br>
<div class="container-fluid">
	<p class="h1 text-center" ><?php echo $result['nama'];?></p>
	<br>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 img-thumbnail bg-light">
		<div class="row py-1">
				<div class="col-md-10"><?php echo $result['deskripsi']; ?></div>
		</div>
	</div>
	<div class="col-md-3"></div>
					
</DIV>		
<br>
<br>
	<center><a class="btn btn-dark text-light" href="ekstra.php">Kembali</a></center>
</div>

<br>
<br>
<br>
<?php

include 'layout/footer.php';
?>