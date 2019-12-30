    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];    
    $deskripsi = $_POST['deskripsi'];
    // Query Input Data
    $input = "INSERT INTO fasilitas(nama, jumlah, deskripsi) 
    VALUES ('$nama','$jumlah','$deskripsi')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Fasilitas Berhasil Diinput");
    	window.location="fasilitas_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Fasilitas Gagal Diinput");
    	window.location="fasilitas_data.php";
    	</script>';
    	exit();
    }
    ?>
    
    
    
    
    
    