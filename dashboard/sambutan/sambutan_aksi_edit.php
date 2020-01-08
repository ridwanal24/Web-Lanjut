<?php ob_start();
include "koneksi.php";
$id = $_POST['id']; 
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $img = "no";

    /*Create File Sambutan*/
    $path="sambutan/text/";
    if (file_exists($path.$id.".txt")) {
    	unlink($path.$id.".txt");
    }
    $sambutan = fopen($path.$id.".txt", "w");
    fwrite($sambutan, $isi);
    fclose($sambutan);
    /*End of Create File Sambutan*/

    /*Upload Gambar*/
    if ($_FILES['file']['size']>0) {

        $ekstensi_diperbolehkan = array('png','jpg');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 5044070){          
                move_uploaded_file($file_tmp, 'sambutan/img/'.$id.'.png');
                $img = "yes";
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    /*End of Upload Gambar*/

    /*Add To Database*/
    $query = "update sambutan set judul='$title', text='sambutan/text/$id.txt', pathImage='$img' where idArtikel=$id";
    $hasil = mysql_query($query);
    /*End of Add To Database*/
if($hasil){
			echo '<script language="javascript">
				  alert ("Sambutan Berhasil Diupdate");
				  
				  </script>';
				  //exit();
	}/*window.location="sambutan_data.php";*/
?>

