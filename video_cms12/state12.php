<?php
require 'dbconnects.php';
$qry="SELECT * FROM state_tbl where isactive=1";
$rs=mysqli_query($conn,$qry);
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ADD CITY</title>
 </head>
 <body>
 	<form action="inquiryins.php" method="GET">
 		State id:
 		<select name="cate_id">
 		<?php
 			if (mysqli_num_rows($rs)>0) 
 			{
 			 	while ($row=mysqli_fetch_assoc($rs)) 
 			 	{
 								 	
 		?>	
 		
 		<option value="<?php echo $row['id'];?>"><?php echo $row['state_name'];?></option>
 		<?php
 			}
 		}
 		?>
 		</select>
 		address: <input type="text" name="address">
 		contact: <input type="text" name="contact">
 		email_id: <input type="text" name="email_id">
 		question: <textarea rows="5" cols="5" name="question"></textarea>
 		
 		<input type="submit" name="btn_sub">
 	</form>
 </body>
 </html>