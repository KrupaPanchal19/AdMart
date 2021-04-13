<?php
	session_start();
	session_destroy();
	header("location:login-copy.php");
?>