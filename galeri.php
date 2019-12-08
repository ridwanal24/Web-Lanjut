<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
?>

<?php
$db = new mysqli("localhost","root","","db_sekolahmu");
$sql = "SELECT pathImg, pathVideo FROM galeri ";
$sth = $db->query($sql);

$file_path = './assets/img/galeri/';

    while($rows = mysqli_fetch_array($sth)) {
        $img_src = $rows['pathImg'];
        ?>

        <img src="<?php echo $img_src; ?>" alt="" width="300" height="200"/>
        <?php
        }
    ?>
    <?php
include 'layout/footer.php';
?>