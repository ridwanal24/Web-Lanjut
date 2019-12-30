<?php
session_start();
include 'layout/header.php';
?>

<!-- Page Content -->
<div class="container">

  <!-- Jumbotron Header -->
  
  <!-- Page Features -->
  <div class="m-1 row my-5 text-center">
    <div class="col-8 rounded bg-white">Artikel</div>
    <div class="col-1"></div>
    <div class="col-3 rounded">
      <div class="card">
        <h5 class="card-header">AGENDA</h5>
        <div class="card-body">
          <a class="btn btn-primary" href="daftar_agenda.php">Lihat</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>