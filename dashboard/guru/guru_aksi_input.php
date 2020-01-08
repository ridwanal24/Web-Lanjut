    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $kode_jabatan = $_POST['kode_jabatan'];
    $img = "no";
    $password = "1234";

    /*Upload Gambar*/
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){          
            move_uploaded_file($file_tmp, '../../assets/img/guru/'.$nip.'.png');
            $img = "yes";
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
    /*End of Upload Gambar*/

    // Query Input Data
    $input = "INSERT INTO guru(nip, nama_guru, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, kode_jabatan, image, pass) 
    VALUES ($nip,'$nama_guru','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat',$kode_jabatan,'$img', $password)";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
    	echo '<script language="javascript">
    	alert ("Data Guru Berhasil Diinput");
        window.location="guru_data.php";	
    	</script>';
    	exit();
    }
    else {
    	echo '<script language="javascript">
    	alert ("Data Guru Gagal Diinput");

    	</script>';
    	exit();
    }
    ?>
	
	
	
	
	
	