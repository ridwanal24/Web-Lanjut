    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    ini_set('date.timezone', 'Asia/Jakarta');
    // Ambil variabel yang dikirim dari form
    $id_pengumuman = $_POST['id_pengumuman'];
    $tanggal = $_POST['tanggal'];
    //$tanggal = date("Y-m-d H:i:s");
    $posting = $_POST['posting'];
    $kategori = $_POST['kategori'];
	$title = $_POST['title'];
	$descp = $_POST['descp'];
	
    // Query Input Data
	$input="INSERT INTO pengumuman SET id_pengumuman='$id_pengumuman',tanggal='$tanggal',posting='$posting',kategori='$kategori',title='$title', descp='$descp'";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
			echo '<script language="javascript">
				  alert ("Data Pengumuman Berhasil Diinput");
				  window.location="peng_data.php";
				  </script>';
				  exit();
	}
    else {
			echo '<script language="javascript">
				  alert ("Data Pengumuman Gagal Diinput");

				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	