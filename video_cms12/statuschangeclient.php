<?php 
require 'dbconnects.php';
var_dump($_GET);
$client_id=$_GET['client_id'];
echo $client_id;
$qry="SELECT * FROM client_tbl WHERE client_id=$client_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE client_tbl SET isactive=1 WHERE client_id='$client_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE client_tbl SET isactive=0 WHERE client_id='$client_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewclient.php");
	exit();
}
else
{
	echo "Error";
}
?>