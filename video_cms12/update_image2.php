<?php
require 'dbconnects.php';
$id=$_POST['id'];
var_dump($_FILES);
require 'edit_image1.php';

if($_FILES["fileToUpload1"]["name"]=="")
{
	$pic=$_POST['fileToUpload1'];
}
else
{
	require 'edit_image1.php';
	$img=$target_file;
}
$qry="UPDATE subcate_tbl set img='".$img."' where s_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo 'success';
	header("location:viewsubcat.php");
}
}
else
{
	echo 'error';
}
?>