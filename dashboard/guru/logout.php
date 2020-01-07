<?php
session_start();
session_destroy();

/*redirect to home*/
if (file_exists("home.php")) {
	header("location: home.php");
}else{
	header("location: ../../home.php");
}
?>
