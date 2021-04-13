<?php 
require 'dbconnects.php';
var_dump($_POST);
$u=$_POST['user_name'];
$t=$_POST['contact_no'];
$d=$_POST['email_id'];
$r=$_POST['city_name'];
$f=$_POST['feedback'];
$id=$_POST['com_id'];
$qry="UPDATE complain_tbl SET user_name='".$u."', contact_no='".$t."',email_id='".$d."',city_name='".$r."',feedback='".$f."' WHERE com_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewfeedback.php");
}
else
{
	echo "Error";
}
?>
