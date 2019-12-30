 <?php
include "koneksi.php";
$nama         		= $_POST['nama'];
$jumlah			    = $_POST['jumlah'];
$deskripsi		    = $_POST['deskripsi'];
$idFasilitas	    = $_POST['idFasilitas'];


$query=mysql_query("UPDATE fasilitas SET idFasilitas=$idFasilitas, nama='$nama', jumlah=$jumlah, deskripsi='$deskripsi' WHERE idFasilitas=$idFasilitas");

{
			echo '<script language="javascript">
				  alert ("Data Fasilitas Berhasil Diupdate");
				  window.location="fasilitas_data.php";				  		  
				  </script>';
				  //exit();
	}

?>

