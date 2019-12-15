<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $pathVideo = $_POST['pathVideo'];
    $pathImg = $_POST['pathImg'];
  
    // Query Input Data
    $input = "INSERT INTO galeri(pathVideo, pathImg) 
    VALUES ('$pathVideo','$pathImg')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Berhasil Diinput");
    	window.location="galeri_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Gagal Diinput");
    	window.location="galeri_data.php";
    	</script>';
    	exit();
    }
?>