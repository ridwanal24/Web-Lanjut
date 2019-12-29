<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nip = $_POST['nip'];
  
    // Query Input Data
    $input = "INSERT INTO profilsekolah(nip) 
    VALUES ('$nip')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Berhasil Diinput");
    	window.location="profil_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Gagal Diinput");
    	window.location="profil_data.php";
    	</script>';
    	exit();
    }
?>