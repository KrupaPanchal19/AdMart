<?php
require 'dbconnects.php';
var_dump($_GET);
$com_id=$_GET['com_id'];
echo $com_id;

$qry1="UPDATE complain_tbl SET isactive=2 WHERE com_id='$com_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewfeedback.php");
	exit();
}
else
{
	echo "Error";
}

?>