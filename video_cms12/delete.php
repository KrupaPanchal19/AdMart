<?php
require 'dbconnects.php';
var_dump($_GET);
$id=$_GET['id'];
echo $id;

$qry1="UPDATE user_tble SET isactive=2 WHERE id=$id";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewuser.php");
	exit();
}
else
{
	echo "Error";
}

?>