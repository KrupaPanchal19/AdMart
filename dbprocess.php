<?php
require 'dbconnects.php';	
var_dump($_GET);

	if (!isset($_GET['btn_sub'])) {
		exit();
	}


		$fn=$_GET['firstname'];
		$ln=$_GET['lastname'];
		$pass=$_GET['password'];
		$email=$_GET['email'];
		$mobile=$_GET['mobilenum'];
		$gen=$_GET['gender'];
		$se=$_GET['sec_ans'];
		$add=$_GET['Address'];
		$qd=$_GET['question'];
		$isactive=1;
		$dt=date("Y-m-d");
		$usertype=2;
		//$profile="G:/IMG/JK.jpg";
		
	 		echo $fn.$ln.$email.$pass.$cpass.$mobile.$gen.$se.$add.$isactive.$dt.$usertype;

	 	
	 	 $qry="INSERT INTO user_tble(firstname,lastname,password,email,mobilenum,gender,sec_que,sec_ans,Address,doi,isactive,usertype) VALUES('".$fn."','".$ln."','".$pass."','".$email."','".$mobile."','".$gen."','".$qd."','".$se."','".$add."','".$dt."',$isactive,$usertype)";
	 		echo $qry;
	 	
	 	 $rs=mysqli_query($conn,$qry);
	 		if($rs)
	 		{
	 			echo "Insert Success";
	 			header("location:login.php");
	 		}
	 		else
	 		{
	 			echo "Insert error";
	 		}
?>