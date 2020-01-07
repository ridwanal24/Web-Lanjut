<?php
include 'koneksi.php';	 
$nip = $_POST['nip'];
$password = $_POST['password'];

$login = mysql_query("select * from guru where nip='$nip' and pass='$password'");
$cek = mysql_num_rows($login);
$row=mysql_fetch_array($login);

if($cek > 0){
	session_start();
	
	/*Ambil data nama guru*/
	$_SESSION['username'] = $row['nama_guru'];
	/*Status Login*/
	$_SESSION['status'] = "Guru";
	/*Redirect Home*/
	header("location:home.php");
}else{
	echo "<script>if(confirm('Username / Password Salah'))
	{
		document.location.href='login_guru.php'
	}else{
		document.location.href='login_guru.php'	
	}
	;</script>";
}

?>
