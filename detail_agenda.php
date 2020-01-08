<?php

include "koneksi.php";
include 'layout/header.php';

$id_agenda=$_GET['id_agenda'];

$query="select * from agenda where id_agenda=$id_agenda";
$tampil=mysql_query($query);
while ($result=mysql_fetch_array($tampil)) {
	# File
	$path = "assets/img/agenda/".$id_agenda.".png";
	if (file_exists($path)) {
		$path="assets/img/agenda/".$id_agenda.".png";
	}
	else{
		$path="assets/img/agenda/default.png";
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
                            <li><i class="fa fa-clock-o"></i><?php echo date('d F Y', strtotime($result['tanggal']));?></li>
                            <li class="pull-right">Category : <?php echo $result['kategori'];?></li>
                        </ul></small>
                    </div>
                <hr>
            <p>
            <img src="<?php echo $path; ?>" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;">
                  <?php echo $result['descp']; ?></p>
                  </p>
	<br>	
</div>
<?php }
include 'layout/footer.php';?>