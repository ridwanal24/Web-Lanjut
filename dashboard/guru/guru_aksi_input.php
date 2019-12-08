    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_guru");
    // Ambil variabel yang dikirim dari form
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];
	
    // Query Input Data
    $input = "INSERT INTO guru(nip, nama_guru, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, jabatan) 
	VALUES ('$nip','$nama_guru','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$jabatan')";
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
				  window.location="guru_data.php";
				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	