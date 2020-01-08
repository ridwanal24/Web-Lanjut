 <?php ob_start();
include "koneksi.php";


$id_agenda         	= $_POST['id_agenda'];
 $kategori      = $_POST['kategori'];
 $title  = $_POST['title'];
 $descp  = $_POST['descp'];
 $img = "no";


 if ($_FILES['file']['size']>0) {
 	echo 'true';
 	if (file_exists('../../assets/img/agenda/'.$id_agenda.'.png')) {
 		unlink('../../assets/img/agenda/'.$id_agenda.'.png');
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
 			move_uploaded_file($file_tmp, '../../assets/img/agenda/'.$id_agenda.'.png');
 			$img = "yes";
 		}else{
 			echo 'UKURAN FILE TERLALU BESAR';
 		}
 	}else{
 		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
 	}
 }
 /*End of Upload Gambar*/

 $query=mysql_query("UPDATE agenda SET id_agenda=$id_agenda, kategori='$kategori', title='$title', descp='$descp' WHERE id_agenda=$id_agenda");
 {
 	echo '<script language="javascript">
 	alert ("Data Agenda Berhasil Diupdate");
 	window.location="agenda_data.php";
 	</script>';
				  //exit();

 }
 ?>

