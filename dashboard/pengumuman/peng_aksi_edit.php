 <?php ob_start();
include "koneksi.php";

    ini_set('date.timezone', 'Asia/Jakarta');
    $id_pengumuman = $_POST['id_pengumuman'];
    $tanggal = date("Y-m-d H:i:s");
    $posting = $_POST['posting'];
    $kategori = $_POST['kategori'];
    $title = $_POST['title'];
    $descp = $_POST['descp'];

$query=mysql_query("UPDATE pengumuman SET id_pengumuman='$id_pengumuman', tanggal='$tanggal', posting='$posting', kategori='$kategori', 
title='$title', descp='$descp' WHERE id_pengumuman='$id_pengumuman'");
{
            echo '<script language="javascript">
                  alert ("Data Pengumuman Berhasil Diupdate");
                  window.location="peng_data.php";
                  </script>';
                  exit();
    }
?>

