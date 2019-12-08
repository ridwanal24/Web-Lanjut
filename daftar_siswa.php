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