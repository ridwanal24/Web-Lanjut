<?php
session_start();
if (!isset($_SESSION['status'])&&$_SESSION['status']=="admin") {
	echo "Silahkan login dulu ";
}else{

?>

<div class="container-fluid">
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
	</div>
</div>
<?php
}
?>