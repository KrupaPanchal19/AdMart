<?php 
require 'dbconnects.php';
var_dump($_POST);
$cn=$_POST['txt_cn'];
$ct=$_POST['txt_ct'];
$id=$_POST['txt_id'];
$qry="UPDATE client_tbl SET client_name='".$cn."',client_image='".$ct."' WHERE client_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewclient.php");
}
else
{
	echo "Error";
}
?>
