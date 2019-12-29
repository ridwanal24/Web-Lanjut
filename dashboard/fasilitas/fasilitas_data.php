<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['status'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
<!-- <html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Data Siswa Sekolahku</title>
 <link rel="stylesheet" href="css/fasilitas.css">
</head>
<body> -->
	<br>
	<div class="container-fluid">
		<center><h1>DATA FASILITAS</h1></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
				<form action="fasilitas_tambah.php">
					<!-- <form action="fasilitas_tambah.php" class="content"> -->
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary" value="Tambah Fasilitas" /></center></div>
						</div>
						
						<br>
						<table class="table" >
							<tr class="bg-light">
								<!-- <tr bgcolor="#38FE03"> -->
									<td><div align="center"><strong>No</strong></div></td>
									<td><div align="center"><strong>Masjid</strong></div></td>
									<td><div align="center"><strong>Aula</strong></div></td>
									<td><div align="center"><strong>Kantin</strong></div></td>
									<td><div align="center"><strong>Perpustakaan</strong></div></td>
									<td><div align="center"><strong>Bengkel Listrik</strong></div></td>
									<td><div align="center"><strong>Labolatorium Komputer</strong></div></td>
									<td><div align="center"><strong>Ruang Kelas</strong></div></td>
									<td><div align="center"><strong>Ruang Kesehatan</strong></div></td>
									<td><div align="center"><strong>Lapangan Olahraga</strong></div></td>
									<td><div align="center"><strong>Taman</strong></div></td>
									<td><div align="center"><strong>Keamanan</strong></div></td>
									<td><div align="center"><strong>Koperasi Sekolah</strong></div></td>
									<td><div align="center"><strong>Tempat Parkir Sekolah</strong></div></td>
									<td><div align="center"><strong>Toilet</strong></div></td>
									<td><div align="center"><strong>Ruang OSIS</strong></div></td>
									<td><div align="center"><strong>Ruang Guru</strong></div></td>
									<td><div align="center"><strong>Ruang BP/BK</strong></div></td>
									<td><div align="center"><strong>Ruang Tata Usaha</strong></div></td>
									<td><div align="center"><strong>Ruang Kepala Sekolah/KPKNA</strong></div></td>
									<td><div align="center"><strong>Ruang Gudang</strong></div></td>
									<td><div align="center"><strong>Lapangan Upacara</strong></div></td>
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
								$tampil="SELECT * FROM fasilitas limit $posisi, $batas";
								$qryTampil=mysql_query($tampil);
								if ($qryTampil === FALSE) {
									die(mysql_error());
								}
								while ($dataTampil=mysql_fetch_array($qryTampil)) {
									$no++;
									?>

									<tr bgcolor="#FFFFFF">
										<td align="center"><?php echo $no ; ?></td>
										<td align="center"><?php echo $dataTampil['masjid']; ?></td>
										<td align="center"><?php echo $dataTampil['aula']; ?></td>
										<td align="center"><?php echo $dataTampil['kantin']; ?></td>
										<td align="center"><?php echo $dataTampil['perpustakaan']; ?></td>
										<td align="center"><?php echo $dataTampil['bengkel listrik']; ?></td>
										<td align="center"><?php echo $dataTampil['labolatorium komputer']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang kelas']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang kesehatan']; ?></td>
										<td align="center"><?php echo $dataTampil['lapangan olahraga']; ?></td>
										<td align="center"><?php echo $dataTampil['taman']; ?></td>
										<td align="center"><?php echo $dataTampil['keamanan']; ?></td>
										<td align="center"><?php echo $dataTampil['koperasi sekolah']; ?></td>
										<td align="center"><?php echo $dataTampil['tempat parkir sekolah']; ?></td>
										<td align="center"><?php echo $dataTampil['toilet']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang osis']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang guru']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang bp/bk']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang tata usaha']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang kepala sekolah/kpkna']; ?></td>
										<td align="center"><?php echo $dataTampil['ruang gudang']; ?></td>
										<td align="center"><?php echo $dataTampil['lapangan upacara']; ?></td>
										
										<td>
											<div align="center">
												<a href="fasilitas_hapus.php?username=<?php echo $dataTampil['username'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a>
											</td>
											<td>
												<a href="fasilitas_edit.php?username=<?php echo $dataTampil['username']; ?>"><img src="gambar/edit.png" width="20"></a>
											</div>
										</td>
									</tr>
								<?php } ?>

								<tr bgcolor="#FFFFFF">
									<td colspan="11">
										<?php
			//hitung jumlah data
										$jml_data = mysql_num_rows(mysql_query("SELECT * FROM fasilitas"));
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
<br>

</form>
<br>
</div>
<div class="col-md-1"></div>
</div>
</div>

<!-- </body>
	</html> -->
<?php }
include '../layout/footer.php';
?>