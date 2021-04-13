<?php
require 'dbconnects.php';	
var_dump($_GET);

	if (!isset($_GET['btn_sub'])) {
		exit();
	}


		$fn=$_GET['txt_fn'];
		$ln=$_GET['txt_ln'];
		$pass=$_GET['password'];
		$email=$_GET['email'];
		$mobile=$_GET['txt_mob'];
		$gen=$_GET['gen'];
		$add=$_GET['Address'];
		$isactive=1;
		$dt=date("Y-m-d");
		$usertype=2;
		//$profile="G:/IMG/JK.jpg";
		
	 		echo $fn.$ln.$email.$pass.$cpass.$gen.$mobile.$isactive.$dt.$usertype;

	 		$qry="INSERT INTO user_tble(firstname,lastname,password,email,mobilenum,gender,Address,doi,isactive,usertype) VALUES('".$fn."','".$ln."','".$pass."','".$email."','".$mobile."','".$gen."','".$add."','".$dt."',$isactive,$usertype)";
	 		echo $qry;
	 	
	 	 $rs=mysqli_query($conn,$qry);
	 		if($rs)
	 		{
	 			echo "Insert Success";
	 			header("location:viewalluserss.php");
	 		}
	 		else
	 		{
	 			echo "Insert error";
	 		}
?>