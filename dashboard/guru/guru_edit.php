<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<head>
 <link rel="stylesheet" href="css/guru.css">
</head>
<body>
<br><br><br>
	<form action="guru_aksi_edit.php" class="" method="post" enctype="multipart/form-data">
		<?php 
		include "koneksi.php";
		$nip=$_GET['nip'];
		$query=mysql_query("select * from guru where nip='$nip'");
		?>
		<h1 align="center">Edit Data Siswa</h1>
		<table border="0">
		<br>
		<?php
		while($row=mysql_fetch_array($query)){
			$jenis_kelamin=$row['jenis_kelamin'];
			$agama=$row['agama'];
			$kode_jabatan=$row['kode_jabatan'];
		?>
		<tr>
		<td><input type="hidden" name="nip" value="<?php echo $row['nip'];?>" /></td>
		</tr>
		<tr>
		<td><label for="nip">NIP</label></td>
		<td>:</td>
		<td><input type="text" name="nip" id="nip" class="input1" placeholder="nip"  disabled="disabled" value="<?php echo $row['nip'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="nama_guru">Nama Guru</label></td>
		<td>:</td>
		<td><input type="text" name="nama_guru" id="nama_guru" class="input1" placeholder="nama guru" value="<?php echo $row['nama_guru'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="image">Gambar</label></td>
		<td>:</td>
		<td><input type="file" name="image" id="image" class="input1" value="<?php echo $row['image'];?>" /></td>
		</tr>
		<tr>
		<td><label for="tempat_lahir">Tempat Lahir</label></td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" id="tempat_lahir" class="input1" placeholder="tempat lahir" value="<?php echo $row['tempat_lahir'];?>" required /></td>
		</tr>
		<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="input1" placeholder="tanggal lahir" value="<?php echo $row['tanggal_lahir'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
		<td>:</td>
		<td>
		<input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin" <?php if($jenis_kelamin=="Laki-laki"){echo "checked=\"checked\"";}?><label class="" for="">Laki-laki </label>
		<input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin" <?php if($jenis_kelamin=="Perempuan"){echo "checked=\"checked\"";}?><label class="" for="">Perempuan </label>
		</td>
		</tr>
		<tr>
		<td><label for="agama">Agama</label></td>
		<td>:</td>
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
		<td><label for="kode_jabatan">Jabatan</label></td>
		<td>:</td>
		<td>
		<select name="kode_jabatan" class="input5" required>
		<option value="">--Pilih Jabatan --</option>
		<?php
		$hasil_query=mysql_query("SELECT kode_jabatan FROM jabatan");
		while($baris=mysql_fetch_array($hasil_query))
		{
		echo"<option value='{$baris['kode_jabatan']}'".($row['kode_jabatan'] == $baris['kode_jabatan']?" selected":"").">{$baris['kode_jabatan']}</option>";
		}
		?>
		</select>
		</td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Update" /></td>
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