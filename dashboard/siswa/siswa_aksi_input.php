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
    
    /*Upload Gambar*/
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){          
            move_uploaded_file($file_tmp, '../../assets/img/siswa/'.$nip.'.png');
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
    /*End of Upload Gambar*/

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
    
    
    
    
    
    