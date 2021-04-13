<?php
require 'dbconnects.php';
var_dump($_GET);
$a_id=$_GET['a_id'];
echo $a_id;

$qry1="UPDATE advertisment_tbl SET isactive=2 WHERE a_id='$a_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewaddvert.php");
	exit();
}
else
{
	echo "Error";
}

?>