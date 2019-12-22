    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama'];
    $tempat_lahir = $_POST['tempatLahir'];
    $tanggal_lahir = $_POST['tglLahir'];
    $jenis_kelamin = $_POST['gender'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
    

    // Query Input Data
    $input = "INSERT INTO admin(nip, nama, tempatLahir, tglLahir, gender, agama, alamat, idJabatan) 
    VALUES ($nip,'$nama_admin','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat',$jabatan)";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Admin Berhasil Diinput");
    	window.location="admin_data.php";
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Admin Gagal Diinput");
    	window.location="admin_data.php";
    	</script>';
    	exit();
    }
    ?>
    
    
    
    
    
    