<?php
include 'koneksi.php';
    /*// Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $judul = $_POST['judul'];
    $text = $_POST['text'];
    $pathImage = $_POST['pathImage'];
  
    // Query Input Data
    $input = "INSERT INTO artikel(judul, text, pathImage) 
    VALUES ('$judul', '$text','$pathImage')";
    $hasil = mysqli_query($konek,$input);*/

    $id = $_POST['id']; 
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $img = "no";
    
    /*Create File Article*/
    $path="artikel/text/";
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
    $query = "insert into artikel(idArtikel, judul, text, pathImage) values ($id,'$title','artikel/text/$id.txt','$img')";
    $hasil = mysql_query($query);
    /*End of Add To Database*/
    
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Artikel Berhasil Diinput");
    	
    	</script>';
    	exit();
    }
    /*window.location="artikel_data.php";*/
    else {
    	echo '<script language="javascript">
    	alert ("Artikel Gagal Diinput");

    	</script>';
    	exit();
    }
    ?>