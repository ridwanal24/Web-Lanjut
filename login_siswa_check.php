<?php
include 'koneksi.php';	 
$nis = $_POST['nis'];
$password = $_POST['password'];

$login = mysql_query("select * from siswa where nis='$nis' and pass='$password'");
$cek = mysql_num_rows($login);
$row=mysql_fetch_array($login);
<<<<<<< HEAD
 
if($cek > 0){
	session_start();
	
	/*Ambil data nama siswa*/
=======

if($cek > 0){
	session_start();
	
	/*Ambil data nama guru*/
>>>>>>> 7bead31510abf724cfc23cc94b487c809d8e0113
	$_SESSION['username'] = $row['nama'];
	/*Status Login*/
	$_SESSION['status'] = "siswa";
	/*Redirect Home*/
	header("location:home.php");
}else{
<<<<<<< HEAD
	echo "<script>if(confirm('Username / Password Salah'))
	{
		document.location.href='login_siswa.php'
	}else{
		document.location.href='login_siswa.php'	
	}
	;</script>";
}

?>
=======
	
}

?>
>>>>>>> 7bead31510abf724cfc23cc94b487c809d8e0113
