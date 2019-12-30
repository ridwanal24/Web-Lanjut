 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from agenda where id_agenda='$_GET[id_agenda]'");
{
			echo '<script language="javascript">
				  alert ("Data Agenda Berhasil Dihapus");
				  window.location="agenda_data.php";
				  </script>';
				  exit();
	}
?>

