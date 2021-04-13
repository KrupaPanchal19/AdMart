<?php 
require 'dbconnects.php';
var_dump($_GET);
$client_id=$_GET['client_id'];
echo "$client_id";
$qry="SELECT * FROM client_tbl WHERE client_id='$client_id'";
$rs=mysqli_query($conn,$qry); 
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit File</title>
</head>
<body>
	<form action="updateclient.php" method="post">
		<input type="hidden" name="txt_id" value="<?php echo $row['client_id'];?>">
		ClientName:<input type="text" name="txt_cn" value="<?php echo $row['client_name'];?>"><br>
		<input type="submit" name="btn_sub" >
	</form>

		<form action="update_img1.php" enctype="multipart/form-data" method="post">
		<input type="hidden" name="id" value="<?php echo $row['client_id'];?>">
		<img src="<?php echo $row['client_image'];?> " height="200" width="200">
		 catagory Img_src:<input type="File" name="fileToUpload"><br>
		
		<input type="submit" name="btn_sub" value="Update">
		<input type="reset" name="clear">
	</form>

</body>
</html>