<?php
session_start();
session_destroy();

/*redirect to home*/
header("location: home.php")
?>