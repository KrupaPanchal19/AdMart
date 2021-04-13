<?php
    session_start();
    if(isset($_SESSION['id']))
    {
        header("location:dashboard.php");
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ad Mart</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body class="logincolor">
    <div id="wrapper">
        <div class="">
            <div class="container">
                <div class="row main">
                    <div class="panel-heading">
                       <div class="panel-title text-center">
                            <h1 class="title">Sign Up</h1>
                            <hr />
                        </div>
                    </div> 
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="checklogin.php">
                            
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="txt_un" placeholder="Enter Your Email" required=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="txt_ps" placeholder="Enter your Password" required=""/>
                                    </div>
                                </div>
                            </div>
                            <input type="checkbox" name="remember" value="1">Remember Me<br>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="btn_sb" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>

    </div>
        </div>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
