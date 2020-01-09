<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<div class="container-fluid">
	<br>
	<center><p class="h1">DAFTAR AGENDA</p></center>
	<br>

	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Tanggal</th>
						<th scope="col">Agenda</th>
						<th scope="col">Aksi</th>

					</tr>
				</thead>
				<tbody>

					<?php	
					$query = "SELECT * FROM agenda ORDER BY tanggal ASC";
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {
						?>
						<tr>
							<th scope="row"><?php echo $nomor;?></th>
							<td><?php echo date('d F Y', strtotime($result['tanggal']));?></td>
							<td><?php echo $result['title'];?></td>
							<td><?php 
							$id_agenda=$result['id_agenda'];
							?>
							<a class="btn btn-primary text-light" href="detail_agenda.php?id_agenda=<?php echo $id_agenda;?>">Baca Selengkapnya</a>
							</td>
						</tr>		
						<?php
						$nomor++;
					}
					
					?>

</tbody>
			</table>	
		</div>
	</div>
	<br>	
</div>
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
include 'layout/footer.php';
?>