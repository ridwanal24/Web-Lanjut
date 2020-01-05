<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<br><br>
<div class="container-fluid">
	<br>
	<center><p class="h1">DATA JABATAN</p></center>
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
				<form action="jabatan_tambah.php">
				<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-2"><center><a href="guru_data.php"><input type="button" class="btn btn-primary" value="Data Guru" /></a></center></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary align-right" value="Tambah Jabatan" /></center></div>
							<div class="col-md-2"><center><a href="cetak_jabatan.php"><input type="button" class="btn btn-primary" value="Download Excel" /></a></center></div>
							</div>
							<br>

			<table class="table table-striped">
				<thead class="thead-dark">
		<tr class="bg-light">
		<td><div align="center"><strong>Kode Jabatan</strong></div></td>
		<td><div align="center"><strong>Jabatan</strong></div></td>
		<td colspan="2"><div align="center"><strong>Aksi</strong></div></td>
		</tr>
			<?php
			include "koneksi.php";	
			$no=0;
			  $tampil="SELECT * FROM jabatan";
			  $qryTampil=mysql_query($tampil);
			  while ($dataTampil=mysql_fetch_array($qryTampil)) {
			 $no++;
			 ?>
			 
			<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $dataTampil['kode_jabatan']; ?></td>
			<td align="center"><?php echo $dataTampil['jabatan']; ?></td>
			<td><a href="jabatan_hapus.php?kode_jabatan=<?php echo $dataTampil['kode_jabatan'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a></div></td>
			<td><a href="jabatan_edit.php?kode_jabatan=<?php echo $dataTampil['kode_jabatan']; ?>"><img src="gambar/edit.png" width="20"></a></td>
			</tr>
			<?php } ?>
		</table> 
	</form>
	<?php
}else{
	?>
	<br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include '../layout/footer.php';
?>