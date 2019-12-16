<?php
session_start();
//include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<head>
 <link rel="stylesheet" href="css/pengumuman.css">
</head>
<form action="peng_aksi_input.php" class="content" method="post" enctype="multipart/form-data">
		<h1 align="center">Input Data Pengumuman</h1><br>
		<table border="0">
		<tr>
		<td><label for="id_pengumuman">Id</label></td>
		<td>:</td>
		<td><input type="text" name="id_pengumuman" id="id_pengumuman" class="input1" placeholder="Diisi oleh system" disabled="disabled" /></td>
		</tr>
		<tr>
		<td><label for="tanggal">Tanggal</label></td>
		<td>:</td>
		<td><input type="text" name="tanggal" id="tanggal" class="input1" placeholder="Diisi oleh system" disabled="disabled" /></td>
		</tr>
		<tr>
		<td><label for="posting">Posting</label></td>
		<td>:</td>
		<td><select name="posting" class="input5" required>
		<option value="" selected="selected">--Pilih Posting
		<option value="Akademik">Akademik</option>
		<option value="Bendahara">Bendahara</option>
		<option value="Humas">Humas</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="kategori">Kategori</label></td>
		<td>:</td>
		<td><select name="kategori" class="input5" required>
		<option value="" selected="selected">--Pilih Kategori
		<option value="Informasi">Informasi</option>
		<option value="Himbauan">Himbauan</option>
		<option value="Penting">Penting</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="title">Judul Pengumuman</label></td>
		<td>:</td>
		<td><input type="text" name="title" id="title" class="input1" placeholder="Judul Pengumuman" required /></td>
		</tr>
		<tr>
		<td><label for="descp">Isi Pengumuman</label></td>
		<td>:</td>
		<td><input type="textarea" name="descp" id="descp" class="input1" placeholder="Isi Pengumuman" required /></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Simpan" />
		<input type="reset" class="btn1" value="Batal" />
		</td>
		</tr>
		</table>
	</form>
<?php } 
//include '../layout/footer.php';
?>