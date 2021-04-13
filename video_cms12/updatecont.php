<?php 
require 'dbconnects.php';
var_dump($_POST);
$id=$_POST['c_id'];
$n=$_POST['name'];
$cn=$_POST['contact_no'];
$e=$_POST['email'];
$ct=$_POST['city'];
$d=$_POST['description'];
$qry="UPDATE cont_tbl SET name='".$n."',contact_no='".$cn."',email='".$e."',city='".$ct."',description='".$d."' WHERE c_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewcont.php");
}
else
{
	echo "Error";
}
?>
