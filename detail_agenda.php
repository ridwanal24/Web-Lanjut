<?php

include "koneksi.php";
include 'layout/header.php';
					$id_agenda=$_GET['id_agenda'];
					$query=mysql_query("select * from agenda where id_agenda='$id_agenda'");

?>

<?php
					while($row=mysql_fetch_array($query)){
                        $tanggal=$row['tanggal'];
                        $kategori=$row['kategori'];
                        $image=$row['image'];
						$title=$row['title'];
						$descp=$row['descp'];
		?>

<div class="container" style="margin-top:40px">
    <div class="row">
      <div class="col-md-12 bg-white p-5 rounded shadow">
        <div class="">
         <div class="">
                <div class="post-detail">
                  <h3><?php echo $row['title'];?></h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i><?php echo date('d F Y', strtotime($row['tanggal']));?></li>
                            <li class="pull-right">Category : <?php echo $row['kategori'];?></li>
                        </ul></small>
                    </div>
                <hr>
            <p>
                  <img src="dashboard/agenda/images/<?php echo $row['image'];?>" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;">
                  <?php echo $row['descp']; ?></p>
                  </p>
	<br>	
</div>
<?php } 
include 'layout/footer.php';?>