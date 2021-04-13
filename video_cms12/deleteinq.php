<?php
require 'dbconnects.php';
var_dump($_GET);
$inq_id=$_GET['inq_id'];
echo $inq_id;

$qry1="UPDATE inquiry_tbl SET isactive=2 WHERE inq_id='$inq_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewinquiry.php");
	exit();
}
else
{
	echo "Error";
}

?>