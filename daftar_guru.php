<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>

<div class="container-fluid">
	<br>
	<center><p class="h1">DAFTAR GURU</p></center>
	<br>

	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Agama</th>
						<th scope="col">Pilihan</th>

					</tr>
				</thead>
				<tbody>

					<!-- PHP Show Data -->
					<?php
					
					$query = "select nip, guru.nama, jabatan.nama as jabatan, agama from guru join jabatan on jabatan.idJabatan = guru.idJabatan";
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {

						?>
						<tr>
							<th scope="row"><?php echo $nomor;?></th>
							<td><?php echo $result['nama'];?></td>
							<td><?php echo $result['jabatan'];?></td>
							<td><?php echo $result['agama'];?></td>
							<td><?php 
							$nip=$result['nip'];
							?>
							<a class="btn btn-danger text-light" href="profile_guru.php?nip=<?php echo $nip;?>">Lihat Profil</a>
							</td>
						</tr>		
						<?php
						$nomor++;
					}
					
					?>
				
					
					<!-- End of PHP Show Data -->
				</tbody>
			</table>	
		</div>
		<div class="col-md-1"></div>
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
	<center><a href="login_admin.php"><button type="button" class="btn btn-primary text-light">LOGIN ADMIN</button></a></center>
	<br>
	<?php
}
include 'layout/footer.php';
?>