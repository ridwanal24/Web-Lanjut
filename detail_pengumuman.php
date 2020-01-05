<?php

include "koneksi.php";
					$id_pengumuman=$_GET['id_pengumuman'];
					$query=mysql_query("select * from pengumuman where id_pengumuman='$id_pengumuman'");

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/pengumuman.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">  
    </style>
</head>

<?php
					while($row=mysql_fetch_array($query)){
						$tanggal=$row['tanggal'];
            $title=$row['posting'];
            $title=$row['kategori'];
						$title=$row['title'];
						$desc=$row['descp'];
		?>

<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                <div class="post-detail">
                  <h3><?php echo $row['title'];?></h3>

                  					
                  
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i><?php echo $row['tanggal'];?></li>
                            <li><i class="fa fa-user"></i> Posting by <?php echo $row['posting'];?></li>
                            <li class="pull-right">Category : <?php echo $row['kategori'];?></li>
                        </ul>
                    </div>
                  <hr>
                  <p>
                  <?php echo $row['descp']; ?></p>
                  </p>
		</div>
		<div class="col-md-1"></div>
	</div>

	<br>	
</div>
<?php } ?>