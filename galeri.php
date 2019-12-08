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
// if ($sth->num_rows > 0) {
//     $id_div=1;
    while($rows = mysqli_fetch_array($sth)) {
        $img_src = $rows['pathImg'];
        ?>

        <img src="<?php echo $img_src; ?>" alt="" width="300" height="200"/>
        <?php
        }
    ?>
<!-- } else {
    echo "0 results";
}

?> -->

<?php
include 'layout/footer.php';
?>