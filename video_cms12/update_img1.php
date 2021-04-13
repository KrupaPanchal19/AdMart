<?php
require 'dbconnects.php';
$id=$_POST['id'];
var_dump($_FILES);

if($_FILES["fileToUpload"]["name"]=="")
{
	$profile=$_POST['fileToUpload'];
}
else
{
	require 'edit_image.php';
	$image=$target_file;
}


$qry="UPDATE client_tbl set client_image='".$image."' where client_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo 'seccess';
	header("location:viewclient.php");
}
else
{
	echo 'errer';
}
?>