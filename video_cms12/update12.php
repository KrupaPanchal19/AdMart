<?php 
require 'dbconnects.php';
var_dump($_POST);
var_dump($_POST);
$id=$_POST['cate_id'];
$t=$_POST['cate_name'];
$d=$_POST['price'];
$qry="UPDATE cate_tble SET cate_name='".$t."',price='".$d."' WHERE cate_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewcat.php");
}
else
{
	echo "Error";
}
?>
