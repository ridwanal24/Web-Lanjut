<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';

$id = $_GET['id'];
$query = "select * from artikel where idArtikel=$id";
$action = mysql_query($query);
while ($data = mysql_fetch_array($action)) {
	$title = $data['judul'];
	$img = "dashboard/artikel/artikel/img/".$data['idArtikel'].".png";
	/*Open Artikel*/
	$artikel = fopen("dashboard/artikel/".$data['text'], "r");
	$artikel = fread($artikel, filesize("dashboard/artikel/".$data['text']));
	/*End of End Artikel*/

	/*Set Date*/
	$date = date_create($data['date']);
	$date = date_format($date,"d/m/Y");
	/*End of Set Date*/

?>

<div class="row my-5">
	<div class="col-10 p-3 rounded shadow bg-white mx-auto">
		<p class="h4"><?php echo $title; ?></p>
		<p class="font-italic text-muted">Posted on : <?php echo $date; ?></p>
		<div class="row">
			<div class="col-12 p-5">
				<img width="75%" class="img-fluid mx-auto d-block" src="<?php echo $img;?>">
				<p class="text-left"><?php echo $artikel ;?></p>
			</div>
		</div>
	</div>
</div>

<div class="row mb-5">
	<div class="col-10 p-3 mx-auto bg-white rounded shadow">
		<center><a class="btn btn-primary" href="index.php">Back to Home</a></center>
	</div>
</div>

<?php
}
include 'layout/footer.php';
?>