<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $pathImg = "no";

    /*Upload Gambar*/
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){          
            move_uploaded_file($file_tmp, '../../assets/img/galeri/'.$idGaleri.'.jpg');
            $img = "yes";
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
    /*End of Upload Gambar*/
  
    // Query Input Data
    $input = "INSERT INTO galeri(pathImg) 
    VALUES ('$pathImg')";
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