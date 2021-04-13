<?php
    require 'dbconnects.php';
   
    $fn = $_POST['email'];
    //$que = $_POST['question'];
    $ans = $_POST['ans'];


    //echo $que,$ans;

    $check = "SELECT * FROM user_tble WHERE `email`='".$fn."'  AND `sec_ans`='".$ans."'";
    $check_rs = mysqli_query($conn,$check);
    $check_row = mysqli_fetch_assoc($check_rs);
    $user_id = $check_row['id'];
    if($fn!=$check_row['email'])
    {
        header("location:forgotpass.php");
      } 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Ad Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="20X20"href="img/favicon/logo1.png">
    <link rel="manifest" href="img/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.php">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<header class="header home-page-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Awesome Image"/>
                </a>
            </div>
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
               <ul class="nav navbar-nav navigation-box">
                    <li class="current"> 
                        <a href="index.php">Home</a> 
                        
                    </li>
                    <li> <a href="about.php">About</a> </li>
                   <!--  <li> 
                        <a href="#">Services</a> 
                        <ul class="sub-menu">
                            <?php
                              //  require 'dbconnects.php';
                                
                               // $qry="SELECT * FROM cate_tble where isactive=1";
                               // $rs=mysqli_query($conn,$qry);
                                ?>
                            <?php
                               // if (mysqli_num_rows($rs)>0) 
                                {
                               //     while ($row=mysqli_fetch_assoc($rs)) 
                                    {
                               ?>                       
                                 //   <li><a href="<?php //echo $row['cate_name']?>.php"><?php //echo $row['cate_name']?></li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                    </li> -->
                    <li> 
                        <a href="client.php">Client</a> 
                        
                    </li>
                    
                    <li> 
                        <a href="feedback.php">Feedback</a> 
                        
                    </li>
                    <li> <a href="contact.php">Contact Us</a> </li>
                </ul>


            </div>
        </div>
    </nav>   
</header>
<div id="wrapper">
         <div class="">
            <div class="container">
                <div class="row main">

                    <div class="panel-heading">
                       <div class="panel-title text-center">
                            <h1 class="title"><font face="Garamond"></font>Change Password</h1>
                            <hr width="50%"/>
                        </div>
                    </div> 
                    <div class="col-md-3" ></div>
                    <div class="col-md-6" >
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="POST" action="passedit.php">
                          
                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label"><font face="georgia"></font></label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">            <input type="hidden" name="txt_id"class="form-control" placeholder="Confirm Password" required="" value="<?php echo $user_id;?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="cols-sm-2 control-label"><font face="georgia">New Password:</font></label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-eye fa" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="txt_n"placeholder="Enter New Password" required=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label"><font face="georgia">Confirm Password:</font></label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-eye fa" aria-hidden="true"></i></span>
                                            <input type="password" name="txt_cn"class="form-control" placeholder="Confirm Password" required=""/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <input type="submit" name="btn_sub" class="btn btn-primary btn-lg btn-block login-button">
                                </div>

                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    
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

<div class="footer-bottom">
    <div class="thm-container clearfix">
        <div class="pull-left copy-text">
            <p>&copy; Copyright 2019 Created by <a href="#">Ad Mart Team</a></p>
        </div>
        <div class="social-box pull-right">
            <a href="#" class="fab fa-twitter hvr-pulse"></a>
            <a href="#" class="fab fa-pinterest hvr-pulse"></a>
            <a href="#" class="fab fa-facebook-f hvr-pulse"></a>
            <a href="#" class="fab fa-youtube hvr-pulse"></a>
        </div>
    </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></div>                    

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
</body>
</html>