<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
?>

<?php
$sql = "SELECT pathImg, pathVideo FROM galeri ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $id_div=1;
    while($row = $result->fetch_assoc()) {
        $pathgambar ='./assets/img/galeri/'.$row['pathImg'];
        echo $row["pathImg"];
        $id_div=1+$id_div;

    }
} else {
    echo "0 results";
}
?>

<?php
include 'layout/footer.php';
?>