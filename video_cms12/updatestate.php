<?php 
require 'dbconnects.php';
var_dump($_POST);
$sn=$_POST['state_name'];
$id=$_POST['id'];
$qry="UPDATE state_tbl SET state_name='".$sn."' WHERE id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewstate.php");
}
else
{
	echo "Error";
}
?>
