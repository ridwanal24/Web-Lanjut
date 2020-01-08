 <?php ob_start();
include "koneksi.php";

$id_event         	= $_POST['id_event'];
 $kategori      = $_POST['kategori'];
 $posting      = $_POST['posting'];
 $title  = $_POST['title'];
 $descp  = $_POST['descp'];
 $img = "no";


 if ($_FILES['file']['size']>0) {
 	echo 'true';
 	if (file_exists('../../assets/img/kegiatan/'.$id_event.'.png')) {
 		unlink('../../assets/img/kegiatan/'.$id_event.'.png');
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
 			move_uploaded_file($file_tmp, '../../assets/img/kegiatan/'.$id_event.'.png');
 			$img = "yes";
 		}else{
 			echo 'UKURAN FILE TERLALU BESAR';
 		}
 	}else{
 		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
 	}
 }
 /*End of Upload Gambar*/

 $query=mysql_query("UPDATE kegiatan SET id_event=$id_event, kategori='$kategori', posting='$posting', title='$title', descp='$descp' WHERE id_event=$id_event");
 {
 	echo '<script language="javascript">
 	alert ("Data Kegiatan Berhasil Diupdate");
 	window.location="event_data.php";
 	</script>';
				  //exit();

 }
 ?>

