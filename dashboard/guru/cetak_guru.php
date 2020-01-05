<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Guru.xls");
?>
		<form action="" class="">
		<h3 style="text-align: center;">
		Sekolahku
		<hr>
		</h3>
		<table width="600" border="1">
		<tr bgcolor="#ffffff">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nip</strong></div></td>
		<td><div align="center"><strong>Nama guru</strong></div></td>
		<td><div align="center"><strong>Tempat Lahir</strong></div></td>
		<td><div align="center"><strong>Tanggal Lahir</strong></div></td>
		<td><div align="center"><strong>Jenis Kelamin</strong></div></td>
		<td><div align="center"><strong>Agama</strong></div></td>
		<td><div align="center"><strong>Alamat</strong></div></td>
		<td><div align="center"><strong>Jabatan</strong></div></td>
		</tr>
		<?php
			include "koneksi.php";
			$no=0;
			  $tampil="SELECT * FROM guru";
			  $qryTampil=mysql_query($tampil);
			  if ($qryTampil === FALSE) {
					die(mysql_error());
				}
			  while ($dataTampil=mysql_fetch_array($qryTampil)) {
			 $no++;
			 ?>
			 
			<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $no ; ?></td>
			<td align="center"><?php echo $dataTampil['nip']; ?></td>
			<td><?php echo $dataTampil['nama_guru']; ?></td>
			<td><?php echo $dataTampil['tempat_lahir']; ?></td>
			<td><?php echo $dataTampil['tanggal_lahir']; ?></td>
			<td><?php echo $dataTampil['jenis_kelamin']; ?></td>
			<td><?php echo $dataTampil['agama']; ?></td>
			<td><?php echo $dataTampil['alamat']; ?></td>
			<td><?php echo $dataTampil['jabatan']; ?></td>
			</tr>
						<?php } ?>
		</table>
		&nbsp;
		<div align="right">
			Sekolahku,
			<?php  
			$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
			echo date("j")." ".$namabulan[date("n")]." ".date("Y");
			?>
			<br />
			Kepala Sekolahku
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			...........................................................
		</div>
	</form>