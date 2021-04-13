<?php
require 'dbconnects.php';
var_dump($_POST);
var_dump($_FILES);
	$cate_id=$_POST['cate_id'];
	$s=$_POST['subcate_name'];
	$r=$_POST['rate'];

	 $isactive=1;
	 $dt=date("y-m-d");
	 require 'edit_image.php';
	 $ct=$target_file;
	 require 'fileupload.php';
	 $ct1=$target_file1;
	 $qry="INSERT INTO subcate_tbl(subcate_name,rate,img_src,img,cate_id,isactive,doi) VALUES('".$s."','".$r."','".$ct."','".$ct1."','".$cate_id."', '$isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	 header("location:addsubcat.php");
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

