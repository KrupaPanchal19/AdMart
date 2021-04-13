<?php 
require 'dbconnects.php';
var_dump($_GET);
$id=$_GET['id'];
echo $id;
$qry="SELECT * FROM city_tble WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE city_tble SET isactive=1 WHERE id='$id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE city_tble SET isactive=0 WHERE id='$id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewcity.php");
	exit();
}
else
{
	echo "Error";
}
?>