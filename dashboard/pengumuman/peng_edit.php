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
 <title>Data Pengumuman</title>
 <link rel="stylesheet" href="css/guru.css">
</head>
	<form action="peng_aksi_edit.php" class="content" method="post" enctype="multipart/form-data">
		<?php 
		include "koneksi.php";
		$id_pengumuman=$_GET['id_pengumuman'];
		$query=mysql_query("select * from pengumuman where id_pengumuman='$id_pengumuman'");
		?>
		<h1 align="center">Edit Data Pengumuman</h1>
		<table border="0">
		<?php
		while($row=mysql_fetch_array($query)){
			$tanggal=$row['tanggal'];
			$posting=$row['posting'];
			$kategori=$row['kategori'];
			$title=$row['title'];
			$desc=$row['descp'];
		?>
		<tr>
		<td><input type="hidden" name="id_pengumuman" value="<?php echo $row['id_pengumuman'];?>" /></td>
		</tr>
		<tr>
		<td><label for="id_pengumuman">Id</label></td>
		<td>:</td>
		<td><input type="text" name="id_pengumuman" id="id_pengumuman" class="input1" placeholder="Id Pengumuman"  disabled="disabled" value="<?php echo $row['id_pengumuman'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="tanggal">Id</label></td>
		<td>:</td>
		<td><input type="text" name="tanggal" id="tanggal" class="input1" placeholder="tanggal"  disabled="disabled" value="<?php echo $row['tanggal'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="posting">Posting</label></td>
		<td>:</td>
		<td>
		<select name="posting" class="input5" required>
		<option value="" selected="selected">--Pilih Posting
		<option value="Akademik"<?php if ($posting=="Akademik") { echo "selected=\"selected\""; } ?>>Akademik</option>
		<option value="Bendahara"<?php if ($posting=="Bendahara") { echo "selected=\"selected\""; } ?>>Bendahara</option>
		<option value="Humas"<?php if ($posting=="Humas") { echo "selected=\"selected\""; } ?>>Humas</option>
		</select>
		</td>
		</tr>
		<tr>
		<td><label for="kategori">Kategori</label></td>
		<td>:</td>
		<td>
		<select name="kategori" class="input5" required>
		<option value="" selected="selected">--Pilih Kategori
		<option value="Informasi"<?php if ($kategori=="Informasi") { echo "selected=\"selected\""; } ?>>Informasi</option>
		<option value="Himbauan"<?php if ($kategori=="Himbauan") { echo "selected=\"selected\""; } ?>>Himbauan</option>
		<option value="Penting"<?php if ($kategori=="Penting") { echo "selected=\"selected\""; } ?>>Penting</option>
		</select>
		</td>
		</tr>
		<tr>
		<td><label for="title">Judul Pengumuman</label></td>
		<td>:</td>
		<td><input type="text" name="title" id="title" class="input1" placeholder="Judul Pengumuman" value="<?php echo $row['title'];?>" required /></td>
		</tr>
		<td><label for="descp">Isi Pengumuman</label></td>
		<td>:</td>
		<td><input type="textarea" name="descp" id="descp" class="input1" placeholder="Isi Pengumuman" value="<?php echo $row['descp'];?>" required /></td>
		</tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Update" /></td>
		</tr>
		<?php } ?>
		</table>
	</form>
<?php } 
//include '../layout/footer.php';
?>