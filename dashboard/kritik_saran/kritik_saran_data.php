<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['status'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
	<br>
	<div class="container-fluid">
		<center><h1>KRITIK & SARAN</h1></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
				<form action="guru_tambah.php">
					<!-- <form action="guru_tambah.php" class="content"> -->
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary" value="Tambah Guru" /></center></div>
							<div class="col-md-2"><center><a href="cetak_guru.php"><input type="button" class="btn btn-primary" value="Download Excel" /></a></center></div>
						</div>
						
						<br>
						<table class="table" >
							<tr class="bg-light">
								<!-- <tr bgcolor="#38FE03"> -->
									<td><div align="center"><strong>No</strong></div></td>
									<td><div align="center"><strong>Nama</strong></div></td>
									<td><div align="center"><strong>Nama Guru</strong></div></td>
									<td><div align="center"><strong>Tempat Lahir</strong></div></td>
									<td><div align="center"><strong>Tanggal Lahir</strong></div></td>
									<td><div align="center"><strong>Jenis Kelamin</strong></div></td>
									<td><div align="center"><strong>Agama</strong></div></td>
									<td><div align="center"><strong>Alamat</strong></div></td>
									<td><div align="center"><strong>Jabatan</strong></div></td>
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
								$tampil="SELECT * from kritiksaran";
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
										<td align="center"><?php echo $dataTampil['isi']; ?></td>
										<td align="center"><?php echo $dataTampil['date']; ?></td>
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