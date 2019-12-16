<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $judul = $_POST['judul'];
    $pathText = $_POST['pathText'];
    $pathImage = $_POST['pathImage'];
  
    // Query Input Data
    $input = "INSERT INTO artikel(judul, pathText, pathImage) 
    VALUES ('$judul', '$pathText','$pathImage')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Artikel Berhasil Diinput");
    	window.location="artikel_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Artikel Gagal Diinput");
    	window.location="artikel_data.php";
    	</script>';
    	exit();
    }
?>