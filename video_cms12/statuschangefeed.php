<?php 
require 'dbconnects.php';
var_dump($_GET);
$com_id=$_GET['com_id'];
echo $com_id;
$qry="SELECT * FROM complain_tbl WHERE com_id=$com_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE complain_tbl SET isactive=1 WHERE com_id='$com_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE complain_tbl SET isactive=0 WHERE com_id='$com_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewfeedback.php");
	exit();
}
else
{
	echo "Error";
}
?>