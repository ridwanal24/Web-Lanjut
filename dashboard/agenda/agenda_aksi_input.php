    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $id_agenda = $_POST['id_agenda'];
    $tanggal = $_POST['tanggal'];
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $kategori = $_POST['kategori'];
    $image = $_FILES['image']['name'];
	$title = $_POST['title'];
	$descp = $_POST['descp'];
	
    // Query Input Data
	$input = "INSERT INTO agenda(id_agenda, tanggal, kategori, image, title, descp) 
	VALUES ('$id_agenda', '$tanggal', '$kategori', '$image','$title','$descp')";
    move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$image);
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

				  </script>';
				  exit();
    }
    ?>
	
	
	
	
	
	