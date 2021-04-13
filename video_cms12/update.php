<?php 
require 'dbconnects.php';
var_dump($_POST);
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$e=$_POST['email'];
$m=$_POST['mobilenum'];
$g=$_POST['gender'];
$a=$_POST['Address'];
$id=$_POST['id'];
$qry="UPDATE user_tble SET firstname='".$fn."',lastname='".$ln."',email='".$e."',mobilenum='".$m."',gender='".$g."',Address='".$a."' WHERE id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewuser.php");
}
else
{
	echo "Error";
}
?>