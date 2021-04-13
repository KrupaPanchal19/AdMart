<?php
require 'dbconnects.php';
var_dump($_GET);
$client_id=$_GET['client_id'];
echo $q_id;

$qry1="UPDATE client_tbl SET isactive=2 WHERE client_id='$client_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewclient.php");
	exit();
}
else
{
	echo "Error";
}

?>