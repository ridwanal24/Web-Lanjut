<?php
include 'layout/header.php';
?>
<?php
	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysql_query("select * from admin where username='$username' and pass='$password'");
	$cek = mysql_num_rows($login);
	
	if($cek > 0){
		session_start();
		
		
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "admin";
		//$_SESSION['loginType'];
		header("location:dashboard.php");
	}else{
		header("location:login_admin.php");	
	}
	
?>

<?php
include 'layout/footer.php';
?>