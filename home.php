<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
?>

<style type="text/css">
        .masthead {
  height: 50vh;
  min-height: 500px;
  background-image:  url("assets/img/banner.jpg");
  opacity: .8;
  filter: alpha(opacity=80);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
    </style>
    <!-- Core Stylesheet -->
    <link href="home.css" rel="stylesheet">
</head>

<header class="masthead ">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light text-white"><strong>Sekolahku Negeri 1 Yogyakarta<strong></h1>
        <p class="lead text-white">A great starter layout for a landing page</p>
      </div>
    </div>
  </div>
</header>

<!-- ***** Top Feature Area Start ***** -->
<div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!-- ***** Top Feature Area End ***** -->

<!-- Page Article -->
<div class="row m-0 mt-5 text-center">
  <div id="artikel" class="col-6 rounded mx-auto bg-white shadow">
    <h5 class="text-muted text-left my-3">ARTIKEL</h5>
    <hr>
    <?php
    $query = "SELECT * from artikel limit 2";
    $action = mysql_query($query);
    while ($data = mysql_fetch_array($action)) {
      /*File Artikel*/
      $artikel = fopen("dashboard/artikel/".$data['text'], "r");
      $artikel = fread($artikel, 250);
      /*End of File Artikel*/
      
      /*Set Tanggal*/
      $date = date_create($data['date']);
      $date = date_format($date,"d/m/Y");
      /*End of Set Tanggal*/
      ?>

      <div class="row mt-3 text-left">
        <div class="col-12">
          <p class="font-weight-bold h4"><a href="artikel_open.php?id=<?php echo $data['idArtikel'];?>"><?php echo $data['judul']; ?></a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="dashboard/artikel/artikel/img/<?php echo $data['idArtikel'];?>.png" class="img-fluid mx-auto">
        </div>
        <div class="col-6 text-left">
          <p><small><?php echo $artikel; ?>... <a href="artikel_open.php?id=<?php echo $data['idArtikel'];?>">Read more>></a> </small></p>
        </div>
      </div>
      <div class="text-left font-italic text-muted">Posted on : <?php echo $date; ?></div>
      <hr>
      <?php
    }
    ?>
  </div>
  <!-- End of Page Article -->
  
  <div class="col-4 bg-white shadow rounded">
    <div class="">
      
      <h5 class="p-0 pt-3 px-3 text-muted">PENGUMUMAN</h5>
      <div class="text-left card-body p-0 pl-3">
        <hr>
        <?php
        $query = "SELECT * FROM pengumuman";
        $action = mysql_query($query);

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

<div class="row mt-5">
  <div class="col-6 bg-white shadow mx-auto rounded p-3">
    <h5 class="text-muted">FASILITAS</h5>
    <hr>
  </div>
  <div class="col-4"></div>
</div>

    <br>
<br>
<br>
<?php
include 'layout/footer.php';
?>