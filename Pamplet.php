<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from layerdrops.com/printify/all-services.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 05:30:03 GMT --><head>
    <meta charset="UTF-8" />
    <title>Ad Mart</title>
    <!-- mobile responsive meta -->
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

<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->



<header class="header home-page-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            
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
                                    <li><a href="<?php echo $row['cate_name']?>.php"><?php echo $row['cate_name']?></li>
                            <?php
                                    }
                                }
                            ?>
                            
                           <!--  <li><a href="billboard.php">Bill Board</a></li>
                            <li><a href="bulkad.php">Bulk Ad </a></li>
                            <li><a href="led.php">LED</a></li>
                            <li><a href="hoarding.php">Hoarding</a></li>
 -->
                        </ul><!-- /.sub-menu -->
                    </li>

                    <li> 
                        <a href="client.php">Client</a> 
                        
                    </li>
                    
                    <li> 
                        <a href="feedback.php">Feedback</a> 
                        
                    </li>                    
                    <li> <a href="contact.php">Contact Us</a> </li>
                </ul>

            </div><!-- /.navbar-collapse -->

            
        </div><!-- /.container -->
    </nav>   
</header><!-- /.header -->
 


<section class="page-title">
    <div class="thm-container">
        <h3>Pamplets</h3>        
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->
<br><br>
<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index.php">Homepage</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>Pamplets</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->


<section class="service-style-three sec-pad">
    <div class="thm-container">
        <div class="row masonary-layout">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/service-1-1.jpg"height="350" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="reg.php"><h3>Business Cards</h3></a>
                        <div class="meta-info">
                             <p>50 cards from <span>$19.99</span></p> 
                        </div><!-- /.meta-info -->
                         <p>Cut through the networking clutter and say hello with Printify Business Cards.</p> 
                        <a href="reg.php" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->                    
                </div><!-- /.single-service-three -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/service-1-2.jpg" alt="Awesome Image" height="350"/>
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="reg.php"><h3>Postcards</h3></a>
                        <div class="meta-info">
                             <p>50 cards from <span>$19.99</span></p> 
                        </div><!-- /.meta-info -->
                         <p>Cut through the networking clutter and say hello with Printify Business Cards.</p> 
                        <a href="reg.php" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->                    
                </div><!-- /.single-service-three -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/service-1-3.jpg" alt="Awesome Image" height="350" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="reg.php"><h3>Strickers and Labels</h3></a>
                        <div class="meta-info">
                            <p>50 cards from <span>$19.99</span></p>
                        </div><!-- /.meta-info -->
                         <p>Cut through the networking clutter and say hello with Printify Business Cards.</p>
                           <a href="reg.php" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->                    
                </div><!-- /.single-service-three -->
            </div><!-- /.col-md-4 -->
            <br><br>
            <div class="col-md-6 col-sm-4 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/service-1-6.jpg" alt="Awesome Image" height="350" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="reg.php"><h3>Greeting Cards</h3></a>
                        <div class="meta-info">
                          <p>50 cards from <span>$19.99</span></p>
                        </div><!-- /.meta-info -->
                         <p>Cut through the networking clutter and say hello with Printify Business Cards.</p>
                        <a href="reg.php" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->                    
                </div><!-- /.single-service-three -->
            </div><!-- /.col-md-4 -->
            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/service-1-5.jpg" alt="Awesome Image"  height="237" />
                    </div><!-- /.img-box -->
                 <!--    <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.php"><h3>Envelopes</h3></a>
                        <div class="meta-info">
                            <p>50 cards from <span>$19.99</span></p>
                        </div><!-- /.meta-info -->
                      <!--   <p>Cut through the networking clutter and say hello with Printify Business Cards.</p>
                        <a href="service-details.php" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->                    
             <!--    </div> --><!-- /.single-service-three -->
            <!-- </div><!-- --> <!-- col-md-4 --> 
             <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-service-three">
                    <div class="img-box">
                        <img src="img/air.jpg" alt="Awesome Image" height="237" />
              --> <!--       </div><!-- /.img-box -->
                    <!-- <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.php"><h3>Highway</h3></a>
                        <div class="meta-info">
                            <p>50 cards from <span>$19.99</span></p>
                        </div> --><!-- /.meta-info
               -->        <!--   <p>Cut through the networking clutter and say hello with Printify Business Cards.</p>
                        <a href="service-details.php" class="read-more fas fa-angle-right"></a> -->
                    <!-- </div> --><!-- /.text-box -->                    
                <!-- </div> --><!-- /.single-service-three -->
            <!-- </div> --><!-- /.col-md-4 -->
        <!-- </div> --> <!-- /.row -->
        <nav aria-label="Page navigation" class="text-center">
            <ul class="pagination clearfix">
                </ul>
        </nav>
    </div><!-- /.thm-container -->
</section><!-- /.all-services -->

<div class="footer-bottom">
    <div class="thm-container clearfix">
        <div class="pull-left copy-text">
            <p>&copy; Copyright 2018 Created by <a href="#">Ad Mart Team</a></p>
        </div><!-- /.pull-left copy-text -->
        <div class="social-box pull-right">
            <a href="#" class="fab fa-twitter hvr-pulse"></a><!--  
             --><a href="#" class="fab fa-pinterest hvr-pulse"></a><!--  
             --><a href="#" class="fab fa-facebook-f hvr-pulse"></a><!--  
             --><a href="#" class="fab fa-youtube hvr-pulse"></a>
        </div><!-- /.social-box -->
    </div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

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
<!-- google map helper -->  
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

</body>

<!-- Mirrored from layerdrops.com/printify/all-services.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Sep 2018 05:30:30 GMT -->
</html>