<?php
require 'dbconnects.php';
var_dump($_POST);
	if (!(isset($_POST['btn_sub']))) {
		header("location:feedback.php");
		exit();
	}
	$u=$_POST['user_name'];
	$t=$_POST['contact_no'];
	$d=$_POST['email_id'];
	$r=$_POST['id'];
	$f=$_POST['feedback'];
	
	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $t,$d;


	 $qry="INSERT INTO complain_tbl(user_name,contact_no,email_id,city_name,feedback,isactive,doi) VALUES('".$u."','".$t."','".$d."','".$r."','".$f."',$isactive,'".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:feedback.php");
	 }
	 else
	 {
	 	echo "Insert error";
	 	header("location:login.php?err='feedback'");
	 }
?>

