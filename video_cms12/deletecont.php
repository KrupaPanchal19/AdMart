<?php
require 'dbconnects.php';
var_dump($_GET);
$c_id=$_GET['c_id'];
echo $c_id;

$qry1="UPDATE cont_tbl SET isactive=2 WHERE c_id='$c_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewcont.php");
	exit();
}
else
{
	echo "Error";
}

?>