<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
?>

<div class="container-fluid">
	<br>
	<center><p class="h1">GALERI</p></center>
	<br>

    <br>
	<div class="row">
		<div class="col-md-2"></div>
        <?php
        $db = new mysqli("localhost","root","","db_sekolahmu");
        $sql = "SELECT pathImg, pathVideo FROM galeri ";
        $sth = $db->query($sql);

        $file_path = './assets/img/galeri/';

            while($rows = mysqli_fetch_array($sth)) {
                $img_src = $rows['pathImg'];
                ?>
                <img src="<?php echo $img_src;?>" alt="" width="500" height="300"/>
                <?php
                    }
                ?>
    </div>
</div>
    <?php
include 'layout/footer.php';
?>