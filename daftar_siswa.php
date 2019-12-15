<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>

<div class="container-fluid">
	<br>
	<center><p class="h1">DAFTAR SISWA</p></center>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10 bg-dark">
			
			<!-- Form Pilihan Kelas -->
			<form method="get">
				<div class="form-row">
					<div class="form-group col-md-5">
						<label class="text-light" for="kelas">Kelas</label>
						<select id="kelas" name="kelas" class="form-control">
							<option value="0" selected>Pilih Kelas...</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
					<div class="form-group col-md-5">
						<label class="text-light" for="jurusan">Jurusan</label>
						<select id="jurusan" name="jurusan" class="form-control">
							<option value="0" selected>Pilih Jurusan...</option>
							<option value="1">Komputer Jaringan</option>
							<option value="2">Instalasi Pemanfaatan Tenaga Listrik</option>
						</select>
					</div>

					<div class="col-md-2">
						<br>
						<center><input type="submit" class="btn btn-light" name="submit" value="Tampilkan"></center>
					</div>
				</div>
			</form>
			<!-- End of Form Pilihan Kelas --> 

		</div>
		<div class="col-md-1"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Kelas</th>
						<th scope="col">Jurusan</th>
						<th scope="col"> </th>
					</tr>
				</thead>
				<tbody>

					<!-- PHP Show Data -->
					<?php
					if (/*isset($_GET['submit'])&& */isset($_GET['kelas']) AND isset($_GET['jurusan'])) {
						$kelas = $_GET['kelas'];
						$jurusan = $_GET['jurusan'];
						
						$query = "Select nis, siswa.nama, kelas.nama as kelas, jurusan.nama as jurusan from siswa join kelas on siswa.idKelas = kelas.idKelas join jurusan on jurusan.idJurusan = kelas.idJurusan where kelas.nama=".$kelas." AND jurusan.idJurusan=".$jurusan;
				
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {

						?>
						<a href="profil_siswa.php"><tr>
							<th scope="row"><?php echo $nomor;?></th>
							<td><?php echo $result['nama'];?></td>
							<td><?php echo $result['kelas'];?></td>
							<td><?php echo $result['jurusan'];?></td>
							<td><?php 
							$nis=$result['nis'];
							?>
							<a class="btn btn-light" href="profile_siswa.php?nis=<?php echo $nis;?>">LihatProfil</a>
							</td>
						</tr></a>		
						<?php
						$nomor++;
					}
					}
					?>
				
					<a href="profil_siswa.php?nis="></a>
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
	<?php
}
include 'layout/footer.php';
?>