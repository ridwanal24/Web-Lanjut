<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<head>
 <link rel="stylesheet" href="css/agenda.css">
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<form action="agenda_aksi_edit.php" class="" method="post" enctype="multipart/form-data">
		<?php 
		include "koneksi.php";
		$id_agenda=$_GET['id_agenda'];
		$query=mysql_query("select * from agenda where id_agenda='$id_agenda'");
		?>
		<h1 align="center">Edit Data Agenda</h1>
		<table border="0">
		<?php
		while($row=mysql_fetch_array($query)){
			$tanggal=$row['tanggal'];
			$kategori=$row['kategori'];
			$image=$row['image'];
			$title=$row['title'];
			$desc=$row['descp'];
		?>
		<tr>
		<td><input type="hidden" name="id_agenda" value="<?php echo $row['id_agenda'];?>" /></td>
		</tr>
		<tr>
		<td><label for="id_agenda">Id</label></td>
		<td>:</td>
		<td><input type="text" name="id_agenda" id="id_agenda" class="input1" placeholder="Id Agenda"  disabled="disabled" value="<?php echo $row['id_agenda'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="tanggal">Tanggal</label></td>
		<td>:</td>
		<td><input type="date" name="tanggal" id="tanggal" class="input1" placeholder="tanggal" value="<?php echo $row['tanggal'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="kategori">Kategori</label></td>
		<td>:</td>
		<td>
		<select name="kategori" class="input5" required>
		<option value="" selected="selected">--Pilih Kategori
		<option value="Kunjungan Industri"<?php if ($kategori=="Kunjungan Industri") { echo "selected=\"selected\""; } ?>>Kunjungan Industri</option>
		<option value="Praktek Kerja Lapangan"<?php if ($kategori=="Praktek Kerja Lapangan") { echo "selected=\"selected\""; } ?>>Praktek Kerja Lapangan</option>
		<option value="Jambore Nasional"<?php if ($kategori=="Jambore Nasional") { echo "selected=\"selected\""; } ?>>Jambore Nasional</option>
		<option value="Tour Wisata"<?php if ($kategori=="Tour Wisata") { echo "selected=\"selected\""; } ?>>Tour Wisata</option>
		</select>
		</td>
		</tr>
		<tr>
		<td><label for="image">Gambar</label></td>
		<td>:</td>
		<td><input type="file" name="image" id="image" class="input1" value="<?php echo $row['image'];?>" /></td>
		</tr>
		<tr>
		<td><label for="title">Judul Agenda</label></td>
		<td>:</td>
		<td><input type="text" name="title" id="title" class="input1" placeholder="Judul Agenda" value="<?php echo $row['title'];?>" required /></td>
		</tr>
		<td><label for="descp">Isi Agenda</label></td>
		<td>:</td>
		<td><textarea name="descp" id="descp" class="ckeditor" placeholder="Isi Agenda" <?php echo $row['descp'];?></textarea></td>
		</tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Update" /></td>
		</tr>
		<?php } ?>
		</table>
	</form>

</body>
</html>
<?php } ?>