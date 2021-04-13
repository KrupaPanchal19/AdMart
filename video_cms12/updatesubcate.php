<?php 
require 'dbconnects.php';
var_dump($_POST);
$s=$_POST['txt_s'];
$d=$_POST['txt_d'];
$id=$_POST['txt_id'];
$qry="UPDATE subcate_tbl SET subcate_name='".$s."',description='".$d."' WHERE s_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewsubcat.php");
}
else
{
	echo "Error";
}
?>