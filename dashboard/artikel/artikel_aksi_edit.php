<?php ob_start();
include "koneksi.php";
$id = $_POST['id']; 
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $img = "no";

    /*Create File Article*/
    $path="artikel/text/";
    if (file_exists($path.$id.".txt")) {
    	unlink($path.$id.".txt");
    }
    $artikel = fopen($path.$id.".txt", "w");
    fwrite($artikel, $isi);
    fclose($artikel);
    /*End of Create File Article*/

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
                move_uploaded_file($file_tmp, 'artikel/img/'.$id.'.png');
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
    $query = "update artikel set judul='$title', text='artikel/text/$id.txt', pathImage='$img' where idArtikel=$id";
    $hasil = mysql_query($query);
    /*End of Add To Database*/
if($hasil){
			echo '<script language="javascript">
				  alert ("Artikel Berhasil Diupdate");
				  
				  </script>';
				  //exit();
	}/*window.location="artikel_data.php";*/
?>

