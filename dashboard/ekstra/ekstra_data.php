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
 <link rel="stylesheet" href="css/guru.css">
</head>
<body> -->
	<br>
	<div class="container-fluid">
		<center><h1>DATA EKSTRAKURIKULER</h1></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
				<form action="#" method="get">
					<!-- <form action="guru_tambah.php" class="content"> -->
						<div class="row">
									
							<!-- <div class="col-md-12">
										<div class="input-group">
									  <input type="text" name="nis" class="form-control col-md-4" placeholder="Tulis NIS disini" aria-label="Recipient's username" aria-describedby="button-addon2">
										  <div class="input-group-append">
    										<input class="btn btn-primary text-light btn-outline-secondary" type="submit" value="Cari" name="submit" id="button-addon2"></input>
										  </div>
									</div>
							</div>		 -->
									
						</div>
</form>
					<form action="ekstra_tambah.php">

						<div class="row">
							<div class="col-md-10">
							</div>
							
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary" value="Tambah Ekstrakurikuler" /></center></div>
							<!-- <div class="col-md-2"><center><a href="cetak_siswa.php"><input type="button" class="btn btn-primary" value="Download Excel" /></a></center></div> -->
						</div>
						
						<br>
						<table class="table" >
							<tr class="bg-light">
								<!-- <tr bgcolor="#38FE03"> -->
									<td><div align="center"><strong>No</strong></div></td>
									<td><div align="center"><strong>Ekstrakurikuler</strong></div></td>
									<td><div align="center"><strong>Deskripsi</strong></div></td>
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
								$tampil="SELECT * FROM ekstra limit $posisi, $batas";
								$qryTampil=mysql_query($tampil);
								if ($qryTampil === FALSE) {
									die(mysql_error());
								}

								while ($dataTampil=mysql_fetch_array($qryTampil)) {
									$no++;
									?>

									<tr bgcolor="#FFFFFF">
										<td align="center"><?php echo $no ; ?></td>
										<td align="center"><?php echo $dataTampil['nama']; ?></td>
										<td align="center"><?php echo $dataTampil['deskripsi']; ?></td>
										<td>
											<div align="center">
												<a href="ekstra_hapus.php?idEkstra=<?php echo $dataTampil['idEkstra'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a>
											</td>
											<td>
												<a href="ekstra_edit.php?idEkstra=<?php echo $dataTampil['idEkstra']; ?>"><img src="gambar/edit.png" width="20"></a>
											</div>
										</td>
									</tr>
								<?php } ?>

								<tr bgcolor="#FFFFFF">
									<td colspan="11">
										<?php
			//hitung jumlah data
										$jml_data = mysql_num_rows(mysql_query("SELECT * FROM ekstra"));
			//Jumlah JmlHalaman
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