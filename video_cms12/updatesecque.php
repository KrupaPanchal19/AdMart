<?php 
require 'dbconnects.php';
var_dump($_POST);
$id=$_POST['s_id'];
$q=$_POST['question'];
$qry="UPDATE securityque_tbl SET question='".$q."' WHERE s_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewseq.php");
}
else
{
	echo "Error";
}
?>
