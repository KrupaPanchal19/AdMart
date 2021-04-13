<?php
	session_start();
	var_dump($_SESSION);
	if(!isset($_SESSION["n"]))
	{
		header("location:login.php");
		exit();
	}
	$user=$_SESSION["n"];
	echo "Welcome".$user;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<a href="logout.php">LOGOUT</a>
</body>
</html>