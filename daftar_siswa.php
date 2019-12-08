<?php
include 'koneksi.php';
include 'layout/header.php';
?>

<div class="container-fluid">
	<br>
	<center><p class="h1">DAFTAR SISWA</p></center>
	<br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 bg-dark">
			
					<!-- Form Pilihan Kelas -->
					<form method="get">
						<div class="form-row">
							<div class="form-group col-md-5">
								<label class="text-light" for="kelas">Kelas</label>
								<select id="kelas" class="form-control">
									<option selected>Pilih Kelas...</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="form-group col-md-5">
								<label class="text-light" for="jurusan">Jurusan</label>
								<select id="jurusan" class="form-control">
									<option selected>Pilih Jurusan...</option>
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
		<div class="col-md-2"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Kelas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Budi Setiawan</td>
						<td>Binomo A</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Alan Suryajana</td>
						<td>Trader A</td>
					</tr>

				</tbody>
			</table>	
		</div>
		<div class="col-md-2"></div>
	</div>

	<br>	
</div>

<?php
include 'layout/footer.php';
?>