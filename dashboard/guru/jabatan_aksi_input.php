    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $kode_jabatan = $_POST['kode_jabatan'];
    $jabatan = $_POST['jabatan'];
	
    // Query Input Data
    $input = "INSERT INTO jabatan(kode_jabatan, jabatan) VALUES ('$kode_jabatan','$jabatan')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
			echo '<script language="javascript">
				  alert ("Data Jabatan Berhasil Diinput");
				  window.location="jabatan_data.php";
				  </script>';
				  exit();
	}
    else {
			echo '<script language="javascript">
				  alert ("Data jabatan Gagal Diinput");
				  window.location="jabatan_data.php";
				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	