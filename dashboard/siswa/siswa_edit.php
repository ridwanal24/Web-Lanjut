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
 <link rel="stylesheet" href="css/guru.css">

</head>
<body> -->
	<br>
	<form action="guru_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="guru_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$nip=$_GET['nip'];
			$query=mysql_query("SELECT guru.nama,nip,alamat,gender,tglLahir,tempatLahir,agama, jabatan.nama as jabatan FROM guru join jabatan on jabatan.idJabatan = guru.idJabatan where nip='$nip'");
			?>
			<h1 align="center">Edit Data Siswa</h1>
			<br>
			<table border="0">
				<?php
				while($row=mysql_fetch_array($query)){
					$jenis_kelamin=$row['gender'];
					$agama=$row['agama'];
					$jabatan=$row['jabatan'];
					?>
					<tr>
						<td><input type="hidden" name="nip" value="<?php echo $row['nip'];?>" /></td>
					</tr>
					<tr>
						<td><label for="nip">NIP</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="nip" id="nip" class="input1" placeholder="nip"  disabled="disabled" value="<?php echo $row['nip'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="nama_siswa">Nama Guru</label></td>
						<td> : </td>
						<td><input type="text" name="nama" id="nama_guru" class="input1" placeholder="nama guru" value="<?php echo $row['nama'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="tempat_lahir">Tempat Lahir</label></td>
						<td> : </td>
						<td><input type="text" name="tempatLahir" id="tempat_lahir" class="input1" placeholder="tempat lahir" value="<?php echo $row['tempatLahir'];?>" required /></td>
					</tr>
					<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
					<td> : </td>
					<td><input type="date" name="tglLahir" id="tanggal_lahir" class="input1" placeholder="tanggal lahir" value="<?php echo $row['tglLahir'];?>" required /></td>
				</tr>
				<tr>
					<td><label for="gender">Jenis Kelamin</label></td>
					<td> : </td>
					<td>
						<input type="radio" name="gender" value="L" id="jenis_kelamin" <?php if($jenis_kelamin=="L"){echo "checked=\"checked\"";}?><label class="" for="">Laki-laki </label>
						<input type="radio" name="gender" value="P" id="jenis_kelamin" <?php if($jenis_kelamin=="P"){echo "checked=\"checked\"";}?><label class="" for="">Perempuan </label>
					</td>
				</tr>
				<tr>
					<td><label for="agama">Agama</label></td>
					<td> : </td>
					<td>
						<select name="agama" class="input5" required>
							<option value="" selected="selected">--Pilih Agama
								<option value="Islam"<?php if ($agama=="Islam") { echo "selected=\"selected\""; } ?>>Islam</option>
								<option value="Kristen Katholik"<?php if ($agama=="Kristen Katholik") { echo "selected=\"selected\""; } ?>>Kristen Katholik</option>
								<option value="Kristen Protestan"<?php if ($agama=="Kristen Protestan") { echo "selected=\"selected\""; } ?>>Kristen Protestan</option>
								<option value="Hindu"<?php if ($agama=="Hindu") { echo "selected=\"selected\""; } ?>>Hindu</option>
								<option value="Budha"<?php if ($agama=="Budha") { echo "selected=\"selected\""; } ?>>Budha</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="alamat">Alamat</label></td>
						<td>:</td>
						<td><textarea name="alamat" id="alamat" class="input2" rows="5" cols="30" placeholder="alamat" required><?php echo $row['alamat'];?></textarea></td>
					</tr>
					<tr>
						<td><label for="jabatan">Jabatan</label></td>
						<td> : </td>
						<td>
							<select name="jabatan" class="input5" required>
								<option value="" selected="selected">--Pilih Jabatan
									<option value="1"<?php if ($jabatan=="Kepala Sekolah") { echo "selected=\"selected\""; } ?>>Kepala Sekolah</option>
									<option value="2"<?php if ($jabatan=="Guru Bahasa") { echo "selected=\"selected\""; } ?>>Guru Bahasa</option>
									<option value="3"<?php if ($jabatan=="Guru Olahraga") { echo "selected=\"selected\""; } ?>>Guru Olahraga</option>
									<option value="4"<?php if ($jabatan=="Guru Seni") { echo "selected=\"selected\""; } ?>>Guru Seni</option>
									<option value="5"<?php if ($jabatan=="Guru Musik") { echo "selected=\"selected\""; } ?>>Guru Musik</option>
									<option value="6"<?php if ($jabatan=="Guru Agama") { echo "selected=\"selected\""; } ?>>Guru Agama</option>
								</select>
							</td>
						</tr>
						<td></td>
						<td></td>

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