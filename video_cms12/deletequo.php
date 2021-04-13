<?php
require 'dbconnects.php';
var_dump($_GET);
$q_id=$_GET['q_id'];
echo $q_id;

$qry1="UPDATE quoo_tbl SET isactive=2 WHERE q_id='$q_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewquotation.php");
	exit();
}
else
{
	echo "Error";
}

?>