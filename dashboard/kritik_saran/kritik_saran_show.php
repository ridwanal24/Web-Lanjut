<?php
session_start();
include '../layout/header.php';
include 'koneksi.php';

$query="select * from kritiksaran where idkritik=".$_GET['idKritik'];
$action=mysql_query($query);
$data=mysql_fetch_array($action);

?>
<br>
<div class="container-fluid">
	<p>Menampilkan kritik atau saran dari <b><?php echo $data['nama'];?></b> <?php if ($data['bintang']=="yes") {
		?>
		<img width="32px" src="gambar/star.png">
		<?php } ?></p>
		<div class="row">
			<div class="col-md-6 rounded">
				<textarea class="form-control" cols="20" rows="15" disabled><?php echo $data['isi'];?></textarea>
			</div>
			<div class="col-md-4">
				<?php if ($data['bintang']=="no") { ?>
					<a class="btn btn-primary col-md-4" href="kritik_saran_bintang.php?bintang=yes&idKritik=<?php echo $data['idkritik'];?>">Tandai</a><br><br>	
				<?php
				}else{?>
					<a class="btn btn-primary col-md-4" href="kritik_saran_bintang.php?bintang=no&idKritik=<?php echo $data['idkritik'];?>">Hapus Tanda</a><br><br>	
				<?php }?>
				<a class="btn btn-primary col-md-4" href="kritik_saran_data.php">Kembali</a>
			</div>
		</div>
	</div>
	<br>
	<?php
	include '../layout/footer.php';
	?>