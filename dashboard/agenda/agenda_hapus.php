 <?php ob_start();
 include "koneksi.php";
 $id_agenda = $_GET['id_agenda'];
 mysql_query("delete from agenda where id_agenda=$id_agenda");
 $file = "../../assets/img/agenda/".$id_agenda.".png";
 if (file_exists($file)) {
 	unlink($file);
 }
{
			echo '<script language="javascript">
				  alert ("Data Agenda Berhasil Dihapus");
				  window.location="agenda_data.php";
				  </script>';
				  exit();
	}
?>

