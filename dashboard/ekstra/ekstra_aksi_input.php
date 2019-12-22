<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
  
    // Query Input Data
    $input = "INSERT INTO ekstra(nama, deskripsi) 
    VALUES ('$nama','$deskripsi')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Berhasil Diinput");
    	window.location="ekstra_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Gagal Diinput");
    	window.location="ekstra_data.php";
    	</script>';
    	exit();
    }
?>