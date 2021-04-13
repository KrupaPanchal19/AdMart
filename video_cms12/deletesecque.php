<?php
require 'dbconnects.php';
var_dump($_GET);
$s_id=$_GET['s_id'];
echo $s_id;

$qry1="UPDATE securityque_tbl SET isactive=2 WHERE s_id='$s_id'";
echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewseq.php");
	exit();
}
else
{
	echo "Error";
}

?>