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


$qry="UPDATE subcate_tbl set img_src='".$image."' where s_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo 'seccess';
	header("location:viewsubcat.php");
}
}
else
{
	echo 'errer';
}
?>