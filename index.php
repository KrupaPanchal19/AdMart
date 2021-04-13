<?php
  require 'dbconnects.php';
session_start();

if(isset($_SESSION['id']))
{
  $id=$_SESSION['id'];  
}
?>
<?php
error_reporting(0);
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
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div>
<header class="header home-page-one">
   <div class="container-fluid">
                       <div class="row" style="text-align: right;">
                        <div class="col-lg-11">
                        <?php
                        require 'dbconnects.php';
                        if(isset($_SESSION['id']))
                        {
                            $qry1="SELECT * FROM user_tble WHERE id=$id";
                            
                            $rs1=mysqli_query($conn,$qry1);
                            $row1=mysqli_fetch_assoc($rs1);

                            echo "Welcome"." ".$row1['firstname'];
                       }
                        ?></div></div></div>
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
                    <li> 
                        <a href="#">Services</a> 
                        <ul class="sub-menu">
                            <?php
                                require 'dbconnects.php';
                                $qry="SELECT * FROM cate_tble where isactive=1";
                                $rs=mysqli_query($conn,$qry);
                                ?>
                            <?php
                                if (mysqli_num_rows($rs)>0) 
                                {
                                    while ($row=mysqli_fetch_assoc($rs)) 
                                    {
                               ?>                       
                                    <li><a href="services.php?cateid=<?php echo $row['cate_id']?>"><?php echo $row['cate_name']?></a></li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                    </li>
                    <li> 
                        <a href="client.php">Client</a> 
                        
                    </li>
                    
                    <li> 
                        <a href="feedback.php">Feedback</a> 
                        
                    </li>
                    <li> <a href="contact.php">Contact Us</a> </li>
                     
                        <?php if(isset($_SESSION['id']))
                        {
                            ?>
                        <li><a href="logout.php">LogOut</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                        <li><a href="login.php">Login</a></li>
                            <?php
                        }?> 
                </ul>
            </div>
        </div>
    </nav>   
</header>
 <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">           
   <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(img/oppoo.jpg);background-position: left top ;">
             
            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            
                            <h2 data-animation="animated fadeInDown"
                            h,."><font color="#F1C40F" face="Candara" style="text-shadow: 3.5px 2px #FF0000">We Are The Next Generation Of <br />Advertising World</font></h2>
                           
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="item slide-2" style="background-image: url(img/sle.jpg);background-position: left top;">
            
            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                           
                            <h2 data-animation="animated fadeInDown" style="text-shadow: 5px 3.5px #1F2B75"><font color="#FF5D00" face="Consolas">You Ad It<br/>We Prosper It</font></h2>
                           </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="item slide-3" style="background-image: url(img/11.jpg);background-position: left top;">
            
            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                        </div>
                    </div>
                </div>
            </div>                
        </div>
 </div>
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>

    <ul class="carousel-indicators list-inline custom-navigation">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
    </ul>
</div>
<br>
<section class="welcome-section sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-img-box">
                    <img src="img/oppo8.jpg" alt="Awesome Image" height="450px" width="600px"  />
                </div>
            </div>

            <div class="col-md-6">
                <div class="welcome-content">
                    <div class="title">
                        <p>Welcome to Ad Mart</p>
                        <h3>Dream it. Brandit.</h3>
                    </div><!-- /.title -->
                    <p>When we say we’re not happy until you’re happy, we really do mean it. So whether it’s a hoarding or gantries that didn’t print quite the way you hoped, we’ll do everything we can to <br /> fix it.</p>
                    <p>We love great design and believe it can work wonders for every business. That’s why we make it simple to create more impact to convey the message.</p>
                    <a href="about.php" class="thm-btn yellow-bg">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section class="what-we-do sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>Our features</span>
            <h3>What We Do</h3>
            
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single-what-we-do">
                    <div class="img-box">
                        <img src="img/s1.jpg" alt=""  width="569px"/>
                    </div>
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3>Shopping Mall</h3></a>
                        <p>Shopping malls are perhaps the most favourite go to place. Especially the young generation loves to experiment with the different brands. The advertising manner in the shopping mall creates more effect on people as they have comparitively much time.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-what-we-do-one hvr-bounce-to-bottom">
                            <img src="img/digitad.png" height="150px" width="220px">
                            <a href="#"><h3>Digital Adv.</h3></a>
                            <p>Digital Advertising helps to promote your business and expand it on the large scale. Also includes promotions through exteral messages, email and other search engines.</p>
                           
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-what-we-do-one hvr-bounce-to-bottom">
                            <img src="img/digitalad.png" height="150px" width="220px">
                            <a href="#"><h3>Highway Adv.</h3></a>
                            <p>Highway Advertising is one of the most effective technique to develop wide-reaching business.  Billboards includes billboard bicycle, two-sided or three-sided free standing billboards.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-style-one sec-pad">
    <img src="img/service-bg-1-1.jpg" class="background-right" alt="Awesome Image"/>
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="service-content">
                    <div class="title">
                        <span>Checkout our services</span>
                        <h2>Explore Branding <br />Services</h2>
                    </div>
                    <p>We’re an online Advertising company that is passionate about great design and the difference it can make to our customers and the world.</p>
                    <p>We want to set a new standard for advertisment, with remarkable new achievements that bring great design and uncompromising, high standards to the web. </p>
                    <div class="btn-box">
                        <a href="contact.php" class="thm-btn yellow-bg">Learn More</a>
                        <div class="phone-btn"><i class="fas fa-phone"></i>8980147554</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-right-content">
                    <div class="inner">
                        <div class="divider hor"></div>
                        <div class="divider ver"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-service-one hvr-bounce-to-bottom">
                                    <img src="img/sm.png" alt="Awesome Image"/ width="200px" height="100px">
                                   <h3>Shopping Mall <br /> </h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-service-one hvr-bounce-to-bottom">
                                    <img src="img/high.jpg" alt="Awesome Image"/ width="200px" height="120px">
                                    <a href="#"><h3>Highway <br /> </h3></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-service-one hvr-bounce-to-bottom">
                                    <img src="img/bus.jpg" alt="Awesome Image"/ width="200px" height="120px">
                                    <a href="#"><h3>Bus-stand <br /> </h3></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-service-one hvr-bounce-to-bottom">
                                    <img src="img/ledd.jpg" width="200px" height="120px">
                                    <a href="#"><h3>LED <br /> </h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-style-two">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="cta-style-two-content">
                    <div class="title">
                        <span>Do It Yourself</span>
                        <h2>Get a Feel For <br /> Advertisement</h2>
                    </div>
                    <p>Inquire for an advertise so you can touch and feel our premium range of advertisement and finishes for yourself. It’s free! try yourself your advertisement and have a glimpse of it.</p>
                    <a href="#" class="thm-btn yellow-bg">Get Sample</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/free-sample-1-1.jpg" class="pull-left" alt="Awesome Image"/>
            </div>
        </div>
    </div>
</section>

<br><br>
<section class="recent-projects sec-pad">
    <div class="container">
        <div class="sec-title text-center">
            <span>Work showcase</span>
            <h3>Recent Projects</h3>
            <p>There are many variations of advertisement available, but <br /> the majority have suffered alteration in some form.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-recent-project">
                    <div class="img-box">
                        <img src="img/io.jpeg" alt="Awesome Image"/ height="400px">
                    </div>
                    <div class="text-box">
                        
                        <div class="inner hvr-bounce-to-bottom">
                            <span>Hoarding</span>
                            <h3>Jio Digital Life</h3></a>
                        </div>
                    </div>
                    </div>
                </div>
            
         
             <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-recent-project">
                    <div class="img-box">
                        <img src="img/kiso.jpg" alt="Awesome Image"/ height="400px">
                    </div>
                    <div class="text-box">
                        
                        <div class="inner hvr-bounce-to-bottom">
                            <span>Kisok</span>
                            <h3>Ek desh -Ek Awaaz</h3></a>
                        </div>
                    </div>
                    </div>
                </div>
            
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-recent-project">
                    <div class="img-box">
                        <img src="img/min.jpg" alt="Awesome Image"height="400px"/>
                    </div>
                    <div class="text-box">
                        <div class="inner hvr-bounce-to-bottom">
                            <span>Led</span>
                            <h3>Stay happy, Stay healthy</h3>
                        </div>
                    </div>
                </div>
            </div>
    
    
</section>
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
</body>
</html>