<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
<!-- <html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Data Siswa MI Wahid Hasyim</title>
 <link rel="stylesheet" href="css/fasilitas.css">

</head>
<body> -->
	<br>
	<form action="fasilitas_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="fasilitas_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$fasilitas=$_GET['fasilitas'];
			$query=mysql_query("SELECT * FROM fasilitas where fasilitas='$fasilitas'");
			?>
			<h1 align="center">Edit Data Fasilitas</h1>
			<br>
			<table border="0">
				<?php
				while($row=mysql_fetch_array($query)){
					$fasilitas=$row['fasilitas'];
					?>
					<tr>
						<td><input type="hidden" name="username" value="<?php echo $row['username'];?>" /></td>
					</tr>
					<tr>
						<td><label for="masjid">Masjid</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="masjid" id="masjid" class="input1" placeholder="masjid" value="<?php echo $row['masjid'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="aula">Aula</label></td>
						<td> : </td>
						<td><input type="text" name="aula" id="aula" class="input1" placeholder="aula" value="<?php echo $row['aula'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="kantin">Kantin</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="kantin" id="kantin" class="input1" placeholder="kantin" value="<?php echo $row['kantin'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="perpustakaan">Perpustakaan</label></td>
						<td> : </td>
						<td><input type="text" name="perpustakaan" id="perpustakaan" class="input1" placeholder="perpustakaan" value="<?php echo $row['perpustakaan'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="bengkel listrik">Bengkel Listrik</label></td>
						<td> : </td>
						<td><input type="text" name="bengkel listrik" id="bengkel listrik" class="input1" placeholder="bengkel listrik" value="<?php echo $row['bengkel listrik'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="labolatorium komputer">Labolatorium Komputer</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="labolatorium komputer" id="labolatorium komputer" class="input1" placeholder="labolatorium komputer" value="<?php echo $row['labolatorium komputer'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang kelas">Ruang Kelas</label></td>
						<td> : </td>
						<td><input type="text" name="ruang kelas" id="ruang kelas" class="input1" placeholder="ruang kelas" value="<?php echo $row['ruang kelas'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang kesehatan">Ruang Kesehatan</label></td>
						<td> : </td>
						<td><input type="text" name="ruang kesehatan" id="ruang kesehatan" class="input1" placeholder="ruang kesehatan" value="<?php echo $row['ruang kesehatan'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="lapangan olahraga">Lapangan Olahraga</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="lapangan olahraga" id="lapangan olahraga" class="input1" placeholder="lapangan olahraga" value="<?php echo $row['lapangan olahraga'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="taman">Taman</label></td>
						<td> : </td>
						<td><input type="text" name="taman" id="taman" class="input1" placeholder="taman" value="<?php echo $row['taman'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="keamanan">Keamanan</label></td>
						<td> : </td>
						<td><input type="text" name="keamanan" id="keamanan" class="input1" placeholder="keamanan" value="<?php echo $row['keamanan'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="koperasi sekolah">Koperasi Sekolah</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="koperasi sekolah" id="koperasi sekolah" class="input1" placeholder="koperasi sekolah" value="<?php echo $row['koperasi sekolah'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="tempat parkir sekolah">Tempat Parkir Sekolah</label></td>
						<td> : </td>
						<td><input type="text" name="tempat parkir sekolah" id="tempat parkir sekolah" class="input1" placeholder="tempat parkir sekolah" value="<?php echo $row['tempat parkir sekolah'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="toilet">Toilet</label></td>
						<td> : </td>
						<td><input type="text" name="toilet" id="toilet" class="input1" placeholder="toilet" value="<?php echo $row['toilet'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="ruang osis">Ruang Osis</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="ruang osis" id="ruang osis" class="input1" placeholder="ruang osis" value="<?php echo $row['ruang osis'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang guru">Ruang Guru</label></td>
						<td> : </td>
						<td><input type="text" name="ruang guru" id="ruang guru" class="input1" placeholder="ruang guru" value="<?php echo $row['ruang guru'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang bp/bk">Ruang BP/BK</label></td>
						<td> : </td>
						<td><input type="text" name="ruang bp/bk" id="ruang bp/bk" class="input1" placeholder="ruang bp/bk" value="<?php echo $row['ruang bp/bk'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="ruang tata usaha">Ruang Tata Usaha</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="ruang tata usaha" id="ruang tata usaha" class="input1" placeholder="ruang tata usaha" value="<?php echo $row['ruang tata usaha'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang kepala sekolah/kpkna">Ruang Kepala Sekolah/KPKNA</label></td>
						<td> : </td>
						<td><input type="text" name="ruang kepala sekolah/kpkna" id="ruang kepala sekolah/kpkna" class="input1" placeholder="ruang kepala sekolah/kpknan" value="<?php echo $row['ruang kepala sekolah/kpkna'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="ruang gudang">Ruang Gudang</label></td>
						<td> : </td>
						<td><input type="text" name="ruang gudang" id="ruang gudang" class="input1" placeholder="ruang gudang" value="<?php echo $row['ruang gudang'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="lapangan upacara">Lapangan Upacara</label></td>
						<td> : </td>
						<td><input type="text" name="lapangan upacara" id="lapangan upacara" class="input1" placeholder="lapangan upacara" value="<?php echo $row['lapangan upacara'];?>" required /></td>
					</tr>
					<tr>
						<td><input type="submit" class="btn btn-primary" value="Update" /></td>
					</tr>
				<?php } ?>
			</table>
		</form>
		<br>

<!-- </body>
	</html> -->
<?php } 
include '../layout/footer.php';
?>