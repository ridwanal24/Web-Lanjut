<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<div class="container-fluid">
	<br>
	<center><p class="h1">DATA AGENDA</p></center>
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
		<form action="agenda_tambah.php">
			<div class="row">
							<div class="col-md-10"></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary align-right" value="Tambah Agenda" /></center></div>
							</div>
							<br>

			<table class="table table-striped">
				<thead class="thead-dark">
		<tr class="bg-light">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Id</strong></div></td>
		<td><div align="center"><strong>Tanggal</strong></div></td>
		<td><div align="center"><strong>Kategori</strong></div></td>
		<td><div align="center"><strong>Gambar</strong></div></td>
		<td><div align="center"><strong>Agenda</strong></div></td>
		<td><div align="center"><strong>Isi Agenda</strong></div></td>
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
			  $tampil="SELECT * FROM agenda limit $posisi, $batas";
			  $qryTampil=mysql_query($tampil);
			  if ($qryTampil === FALSE) {
					die(mysql_error());
				}
			  while ($dataTampil=mysql_fetch_array($qryTampil)) {
			 $no++;
			 ?>
			 
			<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $no ; ?></td>
			<td align="center"><?php echo $dataTampil['id_agenda']; ?></td>
			<td align="center"><?php echo date('d-m-Y', strtotime($dataTampil['tanggal'])); ?></td>
			<td align="center"><?php echo $dataTampil['kategori']; ?></td>
			<td align="center"><?php echo "<img src='images/$dataTampil[image]' width='70' height='90' />";?></td>
			<td align="center"><?php echo $dataTampil['title']; ?></td>
			<td align="left"><?php echo $dataTampil['descp']; ?></td>
			<td>
			<div align="center">
			<a href="agenda_hapus.php?id_agenda=<?php echo $dataTampil['id_agenda'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a>
			</td>
			<td>
			<a href="agenda_edit.php?id_agenda=<?php echo $dataTampil['id_agenda']; ?>"><img src="gambar/edit.png" width="20"></a>
			</div>
			</td>
			</tr>
			<?php } ?>
			
			<tr bgcolor="#FFFFFF">
			<td colspan="11">
			<?php
			//hitung jumlah data
			$jml_data = mysql_num_rows(mysql_query("SELECT * FROM agenda"));
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
	<center><a href="login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include 'layout/footer.php';
?>