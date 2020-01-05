 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from jabatan where kode_jabatan='$_GET[kode_jabatan]'");
{
			echo '<script language="javascript">
				  alert ("Data Jabatan Guru Berhasil Dihapus");
				  window.location="jabatan_data.php";
				  </script>';
				  exit();
	}

?>

