    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    ini_set('date.timezone', 'Asia/Jakarta');
    // Ambil variabel yang dikirim dari form
    $id_event = $_POST['id_event'];
    $tanggal = date("Y-m-d H:i:s");
    $posting = $_POST['posting'];
    $kategori = $_POST['kategori'];
    $img = "no";
	$title = $_POST['title'];
    $descp = $_POST['descp'];
    
    /*Upload Gambar*/
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){          
            move_uploaded_file($file_tmp, '../../assets/img/kegiatan/'.$id_event.'.png');
            $img = "yes";
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
    /*End of Upload Gambar*/
	
    // Query Input Data
	$input = "INSERT INTO kegiatan (id_event, tanggal, posting, kategori, image, title, descp) 
	VALUES ('$id_event', '$tanggal', '$posting', '$kategori', '$img','$title','$descp')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
			echo '<script language="javascript">
				  alert ("Data Event Berhasil Diinput");
				  window.location="event_data.php";
				  </script>';
				  exit();
	}
    else {
			echo '<script language="javascript">
				  alert ("Data Event Gagal Diinput");
				  window.location="event_data.php";
				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	