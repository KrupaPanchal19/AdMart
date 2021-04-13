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
                            <h1 class="title"><font face="Garamond"></font>LogIn</h1>
                            <hr width="50%"/>
                        </div>
                    </div> 
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="POST" action="checklogin.php">
                                
                                <div class="form-group">
                                    <label for="text" class="cols-sm-2 control-label"><font face="georgia">UserName:</font></label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter your Username" required="" name="firstname"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label"><font face="georgia">Password:</font></label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" placeholder="Enter your Password" required="" name="password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <input type="submit" name="btn_sb" class="btn btn-primary btn-lg btn-block login-button" value="Login">
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
