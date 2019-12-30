 <?php ob_start();
include "koneksi.php";
$nama         		= $_POST['nama'];
$jumlah			    = $_POST['jumlah'];
$deskripsi		    = $_POST['deskripsi'];


$query=mysql_query("UPDATE admin SET nama='$nama', jumlah='$jumlah', deskripsi='$deskripsi' WHERE nama='$nama'");
{
			echo '<script language="javascript">
				  alert ("Data Fasilitas Berhasil Diupdate");
				  window.location="fasilitas_data.php";
				  </script>';
				  //exit();
	}
?>

