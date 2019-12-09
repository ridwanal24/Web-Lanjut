<?php
include 'koneksi.php';	 
$nis = $_POST['nis'];
$password = $_POST['password'];

$login = mysql_query("select * from siswa where nis='$nis' and pass='$password'");
$cek = mysql_num_rows($login);
$row=mysql_fetch_array($login);
 
if($cek > 0){
	session_start();
	
	/*Ambil data nama siswa*/
	$_SESSION['username'] = $row['nama'];
	/*Status Login*/
	$_SESSION['status'] = "siswa";
	/*Redirect Home*/
	header("location:home.php");
}else{
	echo "<script>if(confirm('Username / Password Salah'))
	{
		document.location.href='login_siswa.php'
	}else{
		document.location.href='login_siswa.php'	
	}
	;</script>";
}

?>