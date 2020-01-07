<?php
include 'layout/header.php';
include "koneksi.php";
$id_pengumuman=$_GET['id'];
$query=mysql_query("select * from pengumuman where id_pengumuman='$id_pengumuman'");

?>

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
      <div class="col-md-12 bg-white p-5 rounded shadow">
        <div class="">
         <div class="">
          <div class="post-detail">
            <h3><?php echo $row['title'];?></h3>
            <div class="info-meta">
              <small><ul class="list-inline">
                <li><i class="fa fa-clock-o"></i><?php echo $row['tanggal'];?></li>
                <li><i class="fa fa-user"></i> Posting by <?php echo $row['posting'];?></li>
                <li class="pull-right">Category : <?php echo $row['kategori'];?></li>
              </ul></small>
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

    </div>
  </div>
    <?php } 
    include 'layout/footer.php';
    ?>