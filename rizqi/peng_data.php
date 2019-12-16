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
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<div class="container-fluid">
	<br>
	<center><p class="h1">DATA PENGUMUMAN</p></center>
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<br>
		<form action="peng_tambah.php">
			<div class="row">
							<div class="col-md-10"></div>
							<div class="col-md-2"><center><input type="submit" class="btn btn-primary align-right" value="Tambah Pengumuman" /></center></div>
							</div>

			<table class="table table-striped">
				<thead class="thead-dark">
		<tr class="bg-light">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Id</strong></div></td>
		<td><div align="center"><strong>Tanggal</strong></div></td>
		<td><div align="center"><strong>Posting</strong></div></td>
		<td><div align="center"><strong>Kategori</strong></div></td>
		<td><div align="center"><strong>Judul</strong></div></td>
		<td><div align="center"><strong>Isi Pengumuman</strong></div></td>
		<td colspan="2"><div align="center"><strong>Aksi</strong></div></td>
		</tr>
	</thead>
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
			  $tampil="SELECT * FROM pengumuman limit $posisi, $batas";
			  $qryTampil=mysql_query($tampil);
			  if ($qryTampil === FALSE) {
					die(mysql_error());
				}
			  while ($dataTampil=mysql_fetch_array($qryTampil)) {
			 $no++;
			 ?>
			 
			<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $no ; ?></td>
			<td align="center"><?php echo $dataTampil['id_pengumuman']; ?></td>
			<td align="center"><?php echo $dataTampil['tanggal']; ?></td>
			<td align="center"><?php echo $dataTampil['posting']; ?></td>
			<td align="center"><?php echo $dataTampil['kategori']; ?></td>
			<td align="left"><?php echo $dataTampil['title']; ?></td>
			<td align="left"><?php echo $dataTampil['descp']; ?></td>
			<td>
			<div align="center">
			<a href="peng_hapus.php?id_pengumuman=<?php echo $dataTampil['id_pengumuman'] ; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><img src="gambar/hapus.png" width="20"></a>
			</td>
			<td>
			<a href="peng_edit.php?id_pengumuman=<?php echo $dataTampil['id_pengumuman']; ?>"><img src="gambar/edit.png" width="20"></a>
			</div>
			</td>
			</tr>
			<?php } ?>
			
			<tr bgcolor="#FFFFFF">
			<td colspan="11">
			<?php
			//hitung jumlah data
			$jml_data = mysql_num_rows(mysql_query("SELECT * FROM pengumuman"));
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

	</div>
<?php } 
//include '../layout/footer.php';
?>