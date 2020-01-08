 <?php ob_start();
 include "koneksi.php";
 mysql_query("delete from pengumuman where id_pengumuman='$_GET[id_pengumuman]'");
{
			echo '<script language="javascript">
				  alert ("Data Pengumuman Berhasil Dihapus");
				  window.location="peng_data.php";
				  </script>';
				  exit();
	}
?>

