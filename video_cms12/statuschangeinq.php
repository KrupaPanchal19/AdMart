<?php 
require 'dbconnects.php';
var_dump($_GET);
$inq_id=$_GET['inq_id'];
echo $inq_id;
$qry="SELECT * FROM inquiry_tbl WHERE inq_id=$inq_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE inquiry_tbl SET isactive=1 WHERE inq_id='$inq_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE inquiry_tbl SET isactive=0 WHERE inq_id='$inq_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewinquiry.php");
	exit();
}
else
{
	echo "Error";
}
?>