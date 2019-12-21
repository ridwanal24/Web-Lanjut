<?php
session_start();
if (isset($_SESSION['status']) AND $_SESSION['status']=="admin") {
	header("location:dashboard/");	
}else{
/*Redirect to Home.php*/
header("location: home.php");
}
?>