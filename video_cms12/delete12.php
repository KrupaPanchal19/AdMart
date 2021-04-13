<?php
require 'dbconnects.php';
var_dump($_GET);
$cate_id=$_GET['cate_id'];
echo $cate_id;

$qry1="UPDATE cate_tble SET isactive=2 WHERE cate_id='$cate_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewcat.php");
	exit();
}
else
{
	echo "Error";
}

?>