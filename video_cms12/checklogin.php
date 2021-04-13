<?php
require 'dbconnects.php';
session_start();
var_dump($_POST);
	if(!isset($_POST['btn_sb']))
	{
		header("location:login-copy.php");
		exit();
	}
		$us=$_POST['firstname'];
		$ps=$_POST['password'];
		echo $us,$ps;
	$qry="SELECT *FROM user_tble WHERE firstname='".$us."' AND password='".$ps."'";

		echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$rows=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$rows['id'];
		$_SESSION['n']=$rows['firstname'];
		if(isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400 * 30),"/");
			setcookie("pass",$ps,time()+(86400 * 30),"/");

		}
		header("location:dashboard.php");
		exit();
	}
	else
	{
		echo "invalid login";
		header("location:login-copy.php");
		exit();
	}
	