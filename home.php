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
<div class="row m-0 mt-5 text-center">
  <div id="artikel" class="col-7 rounded mr-5 bg-white">Artikel</div>
  <div class="col-4 bg-white shadow rounded">
    <div class="bg-white rounded">
      <h5 class="p-0 pt-3 px-3">Pengumuman</h5>
      <div class="text-left card-body p-0 pl-3">
        <hr>
        <?php
        while ($data=mysql_fetch_array($action)) { ?>
          <small>
            <?php

            $string = strip_tags($data['title']);
            if (strlen($string) > 75) {

              $stringCut = substr($string, 0, 75);
              $endPoint = strrpos($stringCut, ' ');

              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
              $string .= '...<br> <a href="detail_pengumuman.php?id='.$data["id_pengumuman"].'">Read More>></a>';
              echo $string;
            }else{
              $string .= '...<br> <a href="detail_pengumuman.php?id='.$data["id_pengumuman"].'">Read More>></a>';
              echo $string;
            }
            ?>
          </small>
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