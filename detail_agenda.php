<?php

include "koneksi.php";
include 'layout/header.php';
					$id_agenda=$_GET['id_agenda'];
					$query=mysql_query("select * from agenda where id_agenda='$id_agenda'");

?>

<head>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">  
    </style>
</head>

<?php
					while($row=mysql_fetch_array($query)){
                        $tanggal=$row['tanggal'];
                        $kategori=$row['kategori'];
                        $image=$row['image'];
						$title=$row['title'];
						$desc=$row['descp'];
		?>

<div class="container" style="margin-top:40px">
              <div class="panel panel-default">
               <div class="panel-body">
                <div class="post-detail">
                  <h3><?php echo $row['title'];?></h3>

                  					
                  
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i><?php echo date('d F Y', strtotime($row['tanggal']));?></li>
                            <li class="pull-right">Category : <?php echo $row['kategori'];?></li>
                        </ul>
                    </div>
                  <hr>
                  <p>
                  <img src="images/<?php echo $row['image'];?>" width="300px" alt="..." style="float:left;padding:5px 10px 5px 10px;"><?php echo $row['descp']; ?></p>
                  </p>
	<br>	
</div>
<?php } 
include 'layout/footer.php';?>