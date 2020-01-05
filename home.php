<?php
session_start();
include 'layout/header.php';
?>

<!-- Page Content -->

  <!-- Jumbotron Header -->
  
  <!-- Page Features -->
  <div class="m-1 row m-5 text-center">
    <div id="artikel" class="col-8 rounded mr-5 bg-white">Artikel</div>
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

<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>