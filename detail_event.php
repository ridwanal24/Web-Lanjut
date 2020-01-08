<?php

include "koneksi.php";
include 'layout/header.php';

$id_event=$_GET['id_event'];

$query="select * from kegiatan where id_event=$id_event";
$tampil=mysql_query($query);
while ($result=mysql_fetch_array($tampil)) {
	# File
	$path = "assets/img/kegiatan/".$id_event.".png";
	if (file_exists($path)) {
		$path="assets/img/kegiatan/".$id_event.".png";
	}
	else{
		$path="assets/img/kegiatan/default.png";
	}

?>

<div class="container" style="margin-top:40px">
    <div class="row">
      <div class="col-md-12 bg-white p-5 rounded shadow">
        <div class="">
         <div class="">
          <div class="post-detail">
                  <h3><?php echo $result['title'];?></h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i><?php echo date('H:i d-F-Y', strtotime($result['tanggal']));?></li>
                            <li><i class="fa fa-user"></i> Posting by <?php echo $result['posting'];?></li>
                            <li class="pull-right">Category : <?php echo $result['kategori'];?></li>
                        </ul>
                    </div>
                  <hr>
                  <p>
                  <img src="<?php echo $path;?>" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;">
                  <?php echo $result['descp']; ?></p>
                 
                  </p>
                  </div>
          <div class="col-md-1"></div>
        </div>

        <br>	
      </div>

    </div>
  </div>
<?php } 
include 'layout/footer.php';?>