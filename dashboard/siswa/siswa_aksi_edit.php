 <?php ob_start();
include "koneksi.php";
$nis          	= $_POST['nis'];
$nama_siswa      = $_POST['nama'];
$tempat_lahir  = $_POST['tempatLahir'];
$tanggal_lahir  = $_POST['tglLahir'];
$jenis_kelamin  = $_POST['gender'];
$agama         = $_POST['agama'];
$alamat         = $_POST['alamat'];
$kelas  = $_POST['kelas'];

$query=mysql_query("UPDATE siswa SET nis=$nis, nama='$nama_siswa', tempatLahir='$tempat_lahir', tglLahir='$tanggal_lahir', 
gender='$jenis_kelamin', agama='$agama', alamat='$alamat', idKelas=$kelas WHERE nis=$nis");
{
			echo '<script language="javascript">
				  alert ("Data Siswa Berhasil Diupdate");
				  window.location="siswa_data.php";
				  </script>';
				  //exit();
				  
	}
?>

