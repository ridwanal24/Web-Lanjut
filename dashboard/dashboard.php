<?php
session_start();
include 'layout/header.php';

if (!isset($_SESSION['status'])) {
	echo "Silahkan login dulu ";
}else{

	?>

	<div class="container-fluid">
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action active">
						Cras justo odio
					</a>
					<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-md-8">			
			</div>
		</div>
	</div>
	<br>
	<?php
}
include 'layout/footer.php';
?>