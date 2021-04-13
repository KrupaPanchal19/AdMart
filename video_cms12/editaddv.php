<?php 
require 'dbconnects.php';
var_dump($_GET);
$a_id=$_GET['a_id'];
echo "$a_id";
$qry="SELECT * FROM advertisment_tbl WHERE a_id='$a_id'";
$rs=mysqli_query($conn,$qry); 
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit File</title>
</head>
<body>
	<form action="updateaddv.php" method="post">
		<input type="hidden" name="txt_id" value="<?php echo $row['a_id'];?>">
		Advertisment Name:<input type="text" name="txt_an" value="<?php echo $row['advertisment_name'];?>"><br>
		Advertisment Type:<input type="text" name="txt_at" value="<?php echo $row['advertisment_type'];?>"><br>
		<input type="submit" name="btn_sub">
		<input type="reset" name="clear">
	</form>

</body>
</html>