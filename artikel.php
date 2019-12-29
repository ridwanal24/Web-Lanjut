<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';

$query="select * from artikel";
$aksi=mysql_query($query);
?>

<!-- Page Content -->
<div class="container">
<br>
<p class="h1 text-center">ARTIKEL</p>
<br>
<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Artikel</th>
                        <th scope="col">Pilihan</th>
					</tr>
				</thead>
				<tbody>

					<!-- PHP Show Data -->
					<?php
					
					$query = "select idArtikel,judul from artikel";
					$show=mysql_query($query);
					$nomor=1;
					while ($result=mysql_fetch_array($show)) {

						?>
						<tr>
							<td><?php echo $result['judul'];?></td>
							<td><?php 
							$idArtikel=$result['idArtikel'];
							?>
							<a class="btn btn-danger text-light" href="detail_artikel.php?idArtikel=<?php echo $idArtikel;?>">Read More</a>
							</td>
						</tr>		
						<?php
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
