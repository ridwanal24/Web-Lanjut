<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';

$query="select * from fasilitas";
$aksi=mysql_query($query);
?>

<!-- Page Content -->
<div class="container">
<br>
<p class="h1 text-center">EKSTRAKURIKULER</p>
<br>
<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Ekstrakurikuler</th>
                        <th scope="col">Pilihan</th>
					</tr>
				</thead>
				<tbody>

					<!-- PHP Show Data -->
					<?php
					
					$query = "select idEkstra, nama from ekstra";
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {

						?>
						<tr>
							<th scope="row"><?php echo $nomor;?></th>
							<td><?php echo $result['nama'];?></td>
							<td><?php 
							$id=$result['idEkstra'];
							?>
							<a class="btn btn-danger text-light" href="detEkstra.php?nip=<?php echo $id;?>">Lihat Profil</a>
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

</div>

<?php
include 'layout/footer.php';
?>
