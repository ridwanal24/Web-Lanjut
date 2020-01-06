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
	<center><p class="h1">DATA GURU</p></center>
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
				<form action="#" method="get">
						<div class="row">
									
							<div class="col-md-12">
										<div class="input-group">
									  <input type="text" name="nip" class="form-control col-md-4" placeholder="Tulis NIP disini" aria-label="Recipient's username" aria-describedby="button-addon2">
										  <div class="input-group-append">
    										<input class="btn btn-primary text-light btn-outline-secondary" type="submit" value="Cari" name="submit" id="button-addon2"></input>
											<div class="col-md-2"><center><a href="guru_data.php"><input type="button" class="btn btn-primary" value="Show All" /></a></center></div>
										  </div>
									</div>
							</div>				
						</div>
						</form>


				
				<form action="guru_tambah.php">
				<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-2"><center><a href="jabatan_data.php"><input type="button" class="btn btn-primary" value="Data Jabatan" /></a></center></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary align-right" value="Tambah Guru" /></center></div>
							<div class="col-md-2"><center><a href="cetak_guru.php"><input type="button" class="btn btn-primary" value="Download Excel" /></a></center></div>
							</div>
							<br>

			<table class="table table-striped">
				<thead class="thead-dark">
		<tr class="bg-light">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nip</strong></div></td>
		<td><div align="center"><strong>Nama Guru</strong></div></td>
		<td><div align="center"><strong>Jabatan</strong></div></td>
		<td><div align="center"><strong>Detail</strong></div></td>
		<td colspan="2"><div align="center"><strong>Aksi</strong></div></td>
		</tr>
			<?php
			include "koneksi.php";
			$batas = 20;
			$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
			 
			if ( empty( $pg ) ) {
			$posisi = 0;
			$pg = 1;
			} else {
			$posisi = ( $pg - 1 ) * $batas;
			}	
			$no=0+$posisi;
			if (isset($_GET['submit'])) {
				$tampil="select guru.nama_guru, nip, jabatan, jabatan.jabatan as jabatan from guru join jabatan on jabatan.kode_jabatan=guru.kode_jabatan where nip=".$_GET['nip'];
			}else{
			  $tampil="SELECT * FROM guru, jabatan WHERE guru.kode_jabatan=jabatan.kode_jabatan limit $posisi, $batas";
			}
			  $qryTampil=mysql_query($tampil);
			  if ($qryTampil === FALSE) {
					die(mysql_error());
				}
			  while ($dataTampil=mysql_fetch_array($qryTampil)) {
			 $no++;
			 ?>
			 
			<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $no ; ?></td>
			<td align="center"><?php echo $dataTampil['nip']; ?></td>
			<td align="center"><?php echo $dataTampil['nama_guru']; ?></td>
			<td align="center"><?php echo $dataTampil['jabatan']; ?></td>
			<td align="center"><a href="detail_guru.php?nip=<?php echo $dataTampil['nip'] ; ?>"><img src="gambar/detail.png" width="20"></a>
			<td>
			<div align="center">
			<a href="guru_hapus.php?nip=<?php echo $dataTampil['nip'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a>
			</td>
			<td>
			<a href="guru_edit.php?nip=<?php echo $dataTampil['nip']; ?>"><img src="gambar/edit.png" width="20"></a>
			</div>
			</td>
			</tr>
			<?php } ?>
			
			<tr bgcolor="#FFFFFF">
			<td colspan="11">
			<?php
			//hitung jumlah data
			$jml_data = mysql_num_rows(mysql_query("SELECT * FROM guru"));
			if(mysql_num_rows($qryTampil)==0){
				echo "<br><br><center>Data Tidak Ditemukan</center><br><br>";
			}
			//Jumlah halaman
			$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
			if ( $pg > 1 ) {
			$link = $pg-1;
			$prev = "<a href='?pg=$link'>Sebelumnya </a>";
			} else {
			$prev = "Sebelumnya ";
			}
			
			$nmr = '';
			for ( $i = 1; $i<= $JmlHalaman; $i++ ){
			 
			if ( $i == $pg ) {
			$nmr .= $i . " ";
			} else {
			$nmr .= "<a href='?pg=$i'>$i</a> ";
			}
			}
			
			if ( $pg < $JmlHalaman ) {
			$link = $pg + 1;
			$next = " <a href='?pg=$link'>Selanjutnya</a>";
			} else {
			$next = "Selanjutnya";
			}
			
			echo $prev . $nmr . $next;
			 ?>
			 </td>
			 </tr>
		</table>
	</form>
	<?php
}else{
	?>
	<br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="../../login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="../../login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include '../layout/footer.php';
?>