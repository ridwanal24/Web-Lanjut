 <?php ob_start();
 include "koneksi.php";
 $nis          	= $_POST['nis'];
 $nama_siswa      = $_POST['nama'];
 $tempat_lahir  = $_POST['tempatLahir'];
 $tanggal_lahir  = $_POST['tglLahir'];
 $jenis_kelamin  = $_POST['gender'];
 $agama         = $_POST['agama'];
 $alamat         = $_POST['alamat'];
 $kelas  = $_POST['kelas'];
 $img = "no";


 if ($_FILES['file']['size']>0) {
 	echo 'true';
 	if (file_exists('../../assets/img/siswa/'.$nis.'.png')) {
 		unlink('../../assets/img/siswa/'.$nis.'.png');
 	}

 	/*Upload Gambar*/
 	$ekstensi_diperbolehkan = array('png','jpg');
 	$nama = $_FILES['file']['name'];
 	$x = explode('.', $nama);
 	$ekstensi = strtolower(end($x));
 	$ukuran = $_FILES['file']['size'];
 	$file_tmp = $_FILES['file']['tmp_name'];

 	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
 		if($ukuran < 5044070){          
 			move_uploaded_file($file_tmp, '../../assets/img/siswa/'.$nis.'.png');
 			$img = "yes";
 		}else{
 			echo 'UKURAN FILE TERLALU BESAR';
 		}
 	}else{
 		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
 	}
 }
 /*End of Upload Gambar*/

 $query=mysql_query("UPDATE siswa SET nis=$nis, nama='$nama_siswa', tempatLahir='$tempat_lahir', tglLahir='$tanggal_lahir', 
 	gender='$jenis_kelamin', agama='$agama', alamat='$alamat', idKelas=$kelas WHERE nis=$nis");
 {
 	echo '<script language="javascript">
 	alert ("Data Siswa Berhasil Diupdate");
 	window.location="siswa_data.php";
 	</script>';
				  //exit();

 }
 ?>

