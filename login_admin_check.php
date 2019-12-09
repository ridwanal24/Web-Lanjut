<?php
include 'koneksi.php';	 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from admin where username='$username' and pass='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "admin";
	echo $_SESSION['username'];
	header("location:dashboard/");
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