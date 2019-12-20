<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {

$nis=$_GET['nis'];

$query="select s.nama, s.alamat, s.gender, DATE_FORMAT(s.tglLahir, '%d %M %Y') as lahir , s.tempatLahir, s.agama, s.pathImg as foto, k.nama as kelas, j.nama as jurusan FROM siswa s join kelas k on k.idKelas=s.idKelas join jurusan j ON j.idJurusan=k.idJurusan where nis=$nis";
$tampil=mysql_query($query);
while ($result=mysql_fetch_array($tampil)) {
	# File
	$path = "assets/img/siswa/".$nis.".png";
	if (file_exists($path)) {
		$path="assets/img/siswa/".$nis.".png";
	}
	else{
		$path="assets/img/siswa/default.png";
	}

?>

<br>
<div class="container-fluid">
	<p class="h1 text-center" >Profil Siswa</p>
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
				<div class="col-md-6"><?php echo $result['nama']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Tempat Lahir</div>
				<div class="col-md-6"><?php echo $result['tempatLahir']; ?></div>
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
				<div class="col-md-6"><?php echo $result['gender']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Kelas</div>
				<div class="col-md-6"><?php echo $result['kelas']; ?></div>
			</div>
			<div class="row py-1">
				<div class="font-weight-bold col-md-4">Jurusan</div>
				<div class="col-md-6"><?php echo $result['jurusan']; ?></div>
			</div>
	</div>
	<div class="col-md-3"></div>
					
</DIV>		
<br>
<br>
	<center><a class="btn btn-dark text-light" href="daftar_siswa.php?kelas=<?php echo $_GET['kelas'];?>&jurusan=<?php echo $_GET['jurusan'];?>">Kembali</a></center>
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