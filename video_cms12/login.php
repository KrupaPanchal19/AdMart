<?php
	session_start();
	if(isset($_SESSION['n']))
	{
		header("location:dashboard1.php");
	}
	if(isset($_COOKIE['user']))
	{
		$un=$_COOKIE['user'];
		$ps=$_COOKIE['pass'];
	}
	else
	{
		$un="";
		$ps="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="checklogin.php" method="POST">
		<label>Username:</label>
		<input type="text" name="txt_un" value="<?php echo $un; ?>"><br>
		<label>Password:</label>
		<input type="text" name="txt_ps" value="<?php echo $ps; ?>"><br>
		<input type="checkbox" name="remember" value="1">Remember Me<br>
		<input type="submit" name="btn_sb" value="submit">
	</form>	
</body>
</html>	