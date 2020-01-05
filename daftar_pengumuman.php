<?php

include "koneksi.php";

?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
	<br>
	<center><p class="h1">DAFTAR PENGUMUMAN</p></center>
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
						<th scope="col">Judul</th>

					</tr>
				</thead>
				<tbody>

					<?php	
					$query = "SELECT * FROM pengumuman ORDER BY id_pengumuman ASC";
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {
						?>
						<tr>
							<th scope="row"><?php echo $nomor;?></th>
							<td><?php echo $result['tanggal'];?></td>
							<td><?php echo $result['title'];?></td>
							<td><?php 
							$id_pengumuman=$result['id_pengumuman'];
							?>
							<a class="btn btn-primary text-light" href="detail_pengumuman.php?id_pengumuman=<?php echo $id_pengumuman;?>">Baca Selengkapnya</a>
							</td>
						</tr>		
						<?php
						$nomor++;
					}
					
					?>

</tbody>
			</table>	
		</div>
		<div class="col-md-1"></div>
	</div>

	<br>	
</div>