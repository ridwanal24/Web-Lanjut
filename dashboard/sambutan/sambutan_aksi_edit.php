<?php ob_start();
include "koneksi.php";
$id = $_POST['id']; 
    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];

    /*Create File Sambutan*/
    $path="sambutan/text/";
    if (file_exists($path.$id.".txt")) {
    	unlink($path.$id.".txt");
    }
    $sambutan = fopen($path.$id.".txt", "w");
    fwrite($sambutan, $deskripsi);
    fclose($sambutan);
    /*End of Create File Sambutan*/

    /*Add To Database*/
    $query = "update sambutan set judul='$title', $deskripsi' where idSambutan=$id";
    $hasil = mysql_query($query);
    /*End of Add To Database*/
if($hasil){
			echo '<script language="javascript">
				  alert ("Sambutan Berhasil Diupdate");
				  
				  </script>';
				  //exit();
	}/*window.location="sambutan_data.php";*/
?>

