<?php 
require 'dbconnects.php';
var_dump($_POST);
$a=$_POST['txt_a'];
$ct=$_POST['txt_ct'];
$e=$_POST['txt_e'];
$q=$_POST['txt_q'];
$id=$_POST['txt_id'];
$qry="UPDATE inquiry_tbl SET address='".$a."',contact='".$ct."',email_id='".$e."',question='".$q."' WHERE inq_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewinquiry.php");
}
else
{
	echo "Error";
}
?>
