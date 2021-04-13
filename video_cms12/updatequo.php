<?php 
require 'dbconnects.php';
var_dump($_POST);
$p=$_POST['service_name'];
$d=$_POST['name'];
$s=$_POST['quantity'];
$id=$_POST['q_id'];
$qry="UPDATE quoo_tbl SET service_name='".$p."',name='".$d."',quantity='".$s."' WHERE q_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewquotation.php");
}
else
{
	echo "Error";
}
?>
