<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="projects";

	$conn=mysqli_connect($servername,$username,$password);

	if(!$conn)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	echo "Connection successfully";

	$db=mysqli_select_db($conn,$dbname);

	if($db)
	{
		echo "Database Selected";
	}
	else
	{
		echo "Database Not Selected";
	}
?>
