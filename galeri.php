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
      <div class=""></div>
      <?php
      $db = new mysqli("localhost","root","","db_sekolahmu");
      $sql = "SELECT pathImg, pathVideo FROM galeri ";
      $sth = $db->query($sql);

      $file_path = './assets/img/galeri/';
      ?>
      <div class="container">
        <div class="row">
          
            <?php
            while($rows = mysqli_fetch_array($sth)) {
                $img_src = $rows['pathImg'];
                ?>
                <div class="col-md-4">
                <img src="<?php echo $img_src;?>" class="rounded m-1 img-fluid"/>
                </div>
                <?php
            }
            ?>
        
    </div>
</div>
</div>
</div>

<?php
include 'layout/footer.php';
?>