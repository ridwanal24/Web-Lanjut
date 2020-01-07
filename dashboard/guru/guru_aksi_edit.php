 <?php ob_start();
include "koneksi.php";

$nip          	= $_POST['nip'];
$nama_guru      = $_POST['nama_guru'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama         = $_POST['agama'];
$alamat         = $_POST['alamat'];
$kode_jabatan  = $_POST['kode_jabatan'];
$img = "no";

if ($_FILES['file']['size']>0) {
    echo 'true';
    if (file_exists('../../assets/img/guru/'.$nip.'.png')) {
        unlink('../../assets/img/guru/'.$nip.'.png');
    }

    /*Upload Gambar*/
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){          
            move_uploaded_file($file_tmp, '../../assets/img/guru/'.$nip.'.png');
            $img = "yes";
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
/*End of Upload Gambar*/

$query=mysql_query("UPDATE guru SET nip=$nip, nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
    jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', kode_jabatan=$kode_jabatan WHERE nip=$nip");
{
    echo '<script language="javascript">
    alert ("Data Guru Berhasil Diupdate");
    window.location="guru_data.php";
    </script>';
    exit();

}
?>

