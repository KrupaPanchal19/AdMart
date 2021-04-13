<?php
require 'dbconnects.php';
var_dump($_GET);
$img_id=$_GET['img_id'];
echo $img_id;

$qry1="UPDATE img_tbl SET isactive=2 WHERE img_id='$img_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewaddvertlook.php");
	exit();
}
else
{
	echo "Error";
}

?>