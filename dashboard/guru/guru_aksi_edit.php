 <?php ob_start();
include "koneksi.php";
$nip          	= $_POST['nip'];
$nama_guru      = $_POST['nama_guru'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama         = $_POST['agama'];
$alamat         = $_POST['alamat'];
$jabatan  = $_POST['jabatan'];

$query=mysql_query("UPDATE guru SET nip='$nip', nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', jabatan='$jabatan' WHERE nip='$nip'");
{
			echo '<script language="javascript">
				  alert ("Data Guru Berhasil Diupdate");
				  window.location="guru_data.php";
				  </script>';
				  exit();
	}
?>

