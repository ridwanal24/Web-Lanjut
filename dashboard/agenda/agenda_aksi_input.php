    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $id_agenda = $_POST['id_agenda'];
    $tanggal = $_POST['tanggal'];
    $tanggal = date('Y-m-d', strtotime($tanggal));
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
            move_uploaded_file($file_tmp, '../../assets/img/agenda/'.$id_agenda.'.png');
            $img = "yes";
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
    /*End of Upload Gambar*/
	
    // Query Input Data
	$input = "INSERT INTO agenda(id_agenda, tanggal, kategori, image, title, descp) 
	VALUES ('$id_agenda', '$tanggal', '$kategori', '$img','$title','$descp')";
    $hasil = mysqli_query($konek,$input);
    // Apabila query untuk menginput data benar
    if($hasil){
			echo '<script language="javascript">
				  alert ("Data Agenda Berhasil Diinput");
				  window.location="agenda_data.php";
				  </script>';
				  exit();
	}
    else {
			echo '<script language="javascript">
                  alert ("Data Agenda Gagal Diinput");
                  window.location="agenda_data.php";
				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	