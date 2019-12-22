 <?php ob_start();
include "koneksi.php";
$nip          	= $_POST['nip'];
$nama_admin      = $_POST['nama'];
$tempat_lahir  = $_POST['tempatLahir'];
$tanggal_lahir  = $_POST['tglLahir'];
$jenis_kelamin  = $_POST['gender'];
$agama         = $_POST['agama'];
$alamat         = $_POST['alamat'];
$jabatan  = $_POST['jabatan'];

$query=mysql_query("UPDATE admin SET nip=$nip, nama='$nama_admin', tempatLahir='$tempat_lahir', tglLahir='$tanggal_lahir', 
gender='$jenis_kelamin', agama='$agama', alamat='$alamat', idJabatan=$jabatan WHERE nip=$nip");
{
			echo '<script language="javascript">
				  alert ("Data Admin Berhasil Diupdate");
				  window.location="admin_data.php";
				  </script>';
				  //exit();
	}
?>

