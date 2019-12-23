    <?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost","root","","db_sekolahmu");
    // Ambil variabel yang dikirim dari form
    $username = $_POST['username'];
    $pass = $_POST['pass'];    

    // Query Input Data
    $input = "INSERT INTO admin(username, pass) 
    VALUES ('$username','$pass')";
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
    
    
    
    
    
    