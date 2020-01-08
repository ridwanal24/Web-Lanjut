 <?php ob_start();
include "koneksi.php";
$kode_jabatan		= $_POST['kode_jabatan'];
$jabatan          = $_POST['jabatan'];

$query=mysql_query("UPDATE jabatan SET kode_jabatan='$kode_jabatan', jabatan='$jabatan' WHERE kode_jabatan='$kode_jabatan'");
{
			echo '<script language="javascript">
				  alert ("Data Jabatan Berhasil Diupdate");
				  window.location="jabatan_data.php";
				  </script>';
				  exit();
	}
?>
