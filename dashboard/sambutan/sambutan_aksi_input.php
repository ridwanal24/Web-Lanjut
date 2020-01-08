<?php
include 'koneksi.php';

    $id = $_POST['id']; 
    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];

    /*Create File Sambutan*/
    $path="sambutan/text/";
    $sambutan = fopen($de.$id.".txt", "w");
    fwrite($sambutan, $deskripsi);
    fclose($sambutan);
    /*End of Create File Sambutan*/
    /*Add To Database*/
    $query = "insert into sambutan(idSambutan, judul, deskripsi) values ($id,'$title','$deskripsi')";
    $hasil = mysql_query($query);
    /*End of Add To Database*/
    
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Sambutan Berhasil Diinput");
        window.location="sambutan_data.php";	
    	</script>';
    	exit();
    }
    
    else {
    	echo '<script language="javascript">
    	alert ("Sambutan Gagal Diinput");
        window.location="sambutan_data.php";
    	</script>';
    	exit();
    }
    ?>