    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nip = $_POST['nis'];
    $nama_siswa = $_POST['nama'];
    $tempat_lahir = $_POST['tempatLahir'];
    $tanggal_lahir = $_POST['tglLahir'];
    $jenis_kelamin = $_POST['gender'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    

    // Query Input Data
    $input = "INSERT INTO siswa(nis, nama, tempatLahir, tglLahir, gender, agama, alamat, idKelas) 
    VALUES ($nip,'$nama_siswa','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat',$kelas)";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Siswa Berhasil Diinput");
    	window.location="siswa_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Guru Gagal Diinput");
    	window.location="siswa_data.php";
    	</script>';
    	exit();
    }
    ?>
    
    
    
    
    
    