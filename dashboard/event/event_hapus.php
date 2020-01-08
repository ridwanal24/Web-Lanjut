 <?php ob_start();
 include "koneksi.php";
 $id_event = $_GET['id_event'];
 mysql_query("delete from kegiatan where id_event=$id_event");
 $file = "../../assets/img/kegiatan/".$id_event.".png";
 if (file_exists($file)) {
 	unlink($file);
 }
{
			echo '<script language="javascript">
				  alert ("Data Event Berhasil Dihapus");
				  window.location="event_data.php";
				  </script>';
				  exit();
	}
?>

