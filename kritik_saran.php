<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
?>
<br>
<div class="container-fluid">
	<p class="h1 text-center">KRITIK DAN SARAN</p>
	<br>
	<form action="kritik_saran_input.php" method="get" name="kritik_saran_form">
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="p-md-4 col-md-6 bg-light">
				<div class="form-group">
					<label for="Nama">Nama</label>
					<input type="text"<?php if (isset($_SESSION['status'])) {
						echo "readonly";
					} ?> class="form-control" name="nama" id="inputNama" placeholder="Nama" value="<?php if (isset($_SESSION['status'])){
						echo $_SESSION['username'];
					}?>">
				</div>

				<div class="form-group">
					<label for="inputKritik">Kritik & Saran</label>
					<br>
					<textarea name="kritik_saran" class="form-control" placeholder="Tulis kritik dan saran anda disini"></textarea>
				</div>
				<input type="submit" class="btn btn-primary float-right" name="submit">				
			</div>
			<div class="col-md-3"></div>
		</div>
	</form>
</div>


<?php
include 'layout/footer.php';
?>