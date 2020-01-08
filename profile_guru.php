<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
$nip=$_GET['nip'];
$query="select g.nama_guru, g.alamat, g.jenis_kelamin, DATE_FORMAT(g.tanggal_lahir, '%d %M %Y') as lahir , g.tempat_lahir, g.agama, g.image as foto, g.alamat, j.jabatan as jabatan FROM guru g JOIN jabatan j ON j.kode_jabatan=g.kode_jabatan where g.nip=$nip";
$tampil=mysql_query($query);
while ($result=mysql_fetch_array($tampil)) {
	# File
	$path = "assets/img/guru/".$nip.".png";
	if (file_exists($path)) {
		$path="assets/img/guru/".$nip.".png";
	}
	else{
		$path="assets/img/guru/default.png";
	}
?>

<br>
<div class="container-fluid">
	<p class="h1 text-center" >Profil Guru</p>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><img src="<?php echo $path; ?>" class="img-fluid img-thumbnail"></img>
			</div>
			<div class="col-md-4"></div>
		</div>
		<br>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 img-thumbnail bg-light">
		<div class="row py-1">
				<div class="font-weight-bold col-md-4">Nama Lengkap</div>
				<div class="col-md-6"><?php echo $result['nama_guru']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Tempat Lahir</div>
				<div class="col-md-6"><?php echo $result['tempat_lahir']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Tanggal Lahir</div>
				<div class="col-md-6"><?php echo $result['lahir']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Agama</div>
				<div class="col-md-6"><?php echo $result['agama']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Jenis Kelamin</div>
				<div class="col-md-6"><?php echo $result['jenis_kelamin']; ?></div>
			</div>
            <div class="row py-1">
				<div class="font-weight-bold col-md-4">Alamat</div>
				<div class="col-md-6"><?php echo $result['alamat']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Jabatan</div>
				<div class="col-md-6"><?php echo $result['jabatan']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Mata Pelajaran</div>
				<div class="col-md-6"><?php
				
				$query2="select mp.nama as mapel FROM guru g JOIN jabatan j ON j.kode_jabatan=g.kode_jabatan join tugasmapel tm on tm.nip=g.nip join matapelajaran mp on mp.idMapel=tm.idMapel where g.nip=$nip";
				$aksi=mysql_query($query2);
				while ($result2=mysql_fetch_array($aksi)) {
					echo "- ".$result2['mapel']."<br>";
				}
				?></div>
			</div>
	</div>
	<div class="col-md-3"></div>
					
</DIV>		
<br>
<br>
	<center><a class="btn btn-dark text-light" href="daftar_guru.php">Kembali</a></center>
</div>

<br>
<br>
<br>
<?php
}
}else{
	?>
	<br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<center><a href="login_admin.php"><button type="button" class="btn btn-primary text-light">LOGIN ADMIN</button></a></center>
	<br>
	<?php
}
include 'layout/footer.php';
?>