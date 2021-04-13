<?php 
require 'dbconnects.php';
var_dump($_POST);
$an=$_POST['txt_an'];
$at=$_POST['txt_at'];
$id=$_POST['txt_id'];
$qry="UPDATE advertisment_tbl SET advertisment_name='".$an."',advertisment_type='".$at."' WHERE a_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewaddvert.php");
}
else
{
	echo "Error";
}
?>
