<?php 
require 'dbconnects.php';
var_dump($_POST);
$cn=$_POST['city_name'];
$id=$_POST['id'];
$qry="UPDATE city_tble SET city_name='".$cn."' WHERE id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewcity.php");
}
else
{
	echo "Error";
}
?>
