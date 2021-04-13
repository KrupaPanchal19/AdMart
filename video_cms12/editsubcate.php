<?php 
require 'dbconnects.php';
var_dump($_GET);
$s_id=$_GET['s_id'];
echo "$s_id";
$qry="SELECT * FROM subcate_tbl WHERE s_id='$s_id'";
$rs=mysqli_query($conn,$qry); 
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit File</title>
</head>
<body>
	<form action="updatesubcate.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="txt_id" value="<?php echo $row['s_id'];?>">
		Subcategoryname:<input type="text" name="txt_s" value="<?php echo $row['subcate_name'];?>"><br>
		Rate:<input type="text" name="txt_d"  value="<?php echo $row['rate'];?>"><br>
		
	
		<input type="submit" name="btn_sub">
		<input type="reset" name="clear">
	</form>
	<form action="update_image.php" enctype="multipart/form-data" method="post">
		<input type="hidden" name="id" value="<?php echo $row['s_id'];?>">
		<img src="<?php echo $row['img_src'];?> " height="200" width="200">
		 catagory Img_src:<input type="File" name="fileToUpload"><br>
		<input type="submit" name="submit" value="Update">
	</form>
	<form action="update_image2.php" enctype="multipart/form-data" method="post">
		<input type="hidden" name="id" value="<?php echo $row['s_id'];?>">
		<img src="<?php echo $row['img'];?>"height="200" width="200">
		subcatagotry Img:<input type="File" name="fileToUpload1" ><br>
		<input type="submit" name="submit" value="Update">
	</form>

</body>
</html>