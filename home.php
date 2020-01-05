<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
$query = "SELECT * FROM pengumuman";
$action = mysql_query($query);
?>

<!-- Page Content -->

<!-- Jumbotron Header -->

<!-- Page Features -->
<div class="row m-5 text-center">
  <div id="artikel" class="col-8 rounded mr-5 bg-white">Artikel</div>
  <div class="col-3 rounded">
    <div class="card">
      <h5 class="card-header">Pengumuman</h5>
      <div class="text-left card-body">
        <?php
          while ($data=mysql_fetch_array($action)) { ?>
              <small><a href=""><?php echo $data['title']; ?></a></small>
              <hr>
          <?php }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->

<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>