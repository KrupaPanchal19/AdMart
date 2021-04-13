<?php 
require 'dbconnects.php';
var_dump($_POST);
$in=$_POST['txt_in'];
$is=$_POST['txt_is'];
$id=$_POST['txt_id'];
$qry="UPDATE img_tbl SET img_name='".$in."',img_size='".$is."' WHERE img_id='$id'";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewaddvertlook.php");
}
else
{
	echo "Error";
}
?>
