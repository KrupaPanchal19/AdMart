<?php 
require 'dbconnects.php';
var_dump($_GET);
$c_id=$_GET['c_id'];
echo $c_id;
$qry="SELECT * FROM cont_tbl WHERE c_id=$c_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE cont_tbl SET isactive=1 WHERE c_id='$c_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE cont_tbl SET isactive=0 WHERE c_id='$c_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewcont.php");
	exit();
}
else
{
	echo "Error";
}
?>