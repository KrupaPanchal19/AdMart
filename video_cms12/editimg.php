<?php 
require 'dbconnects.php';
var_dump($_GET);
$img_id=$_GET['img_id'];
echo "$img_id";
$qry="SELECT * FROM img_tbl WHERE img_id='$img_id'";
$rs=mysqli_query($conn,$qry); 
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit File</title>
</head>
<body>
	<form action="updateimg.php" method="post">
		<input type="hidden" name="txt_id" value="<?php echo $row['img_id'];?>">
		ImageName:<input type="text" name="txt_in" value="<?php echo $row['img_name'];?>"><br>
		Image Size:<input type="text" name="txt_is" value="<?php echo $row['img_size'];?>"><br
>
		<input type="submit" name="btn_sub">
		<input type="reset" name="clear">
	</form>

</body>
</html>