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

<?php
 require 'header.php';
?>
<section class="page-title">
    <div class="thm-container">
        <h3>About us</h3>        
    </div>
</section>
<br><br>
<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index.php">Homepage</a></li>
            <li><span class="sep">-</span></li>
            <li><span>About Us</span></li>
        </ul>
    </div>
</div>
<br>
<section class="about-section sec-pad">
    <div class="thm-container">
        <div class="row masonary-layout">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-about">
                    <div class="img-box">
                        <img src="img/about-1-1.jpg" alt="Awesome Image"/>
                    </div>
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3>About Company</h3></a>
                        <p>Ad Mart consolidates the scope of urban advertising with different mediums and highly targeted delivery for brands and products. We set the stage for commanding high-density consumer exposure with high impact mediums for the traditional out-of-home advertising in the form of Hoardings, Railway Station Promotion, Transits Boards and Scrollers. </p>
                        
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-about">
                    <div class="img-box">
                        <img src="img/about-1-2.jpg" alt="Awesome Image"/>
                    </div>
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3>Our Promises</h3></a>
                        <p>We promise our customers to maximize and optimize your brands visibility to the masses in the most effective way with a range of creative avenues and placement in major traffic locations.   We provide superior service and support to our clients, with an outlet for innovative ideas that defines products and services along with a profound presence.</p>
                        
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-about">
                    <div class="img-box">
                        <img src="img/about-1-3.jpg" alt="Awesome Image"/>
                    </div>
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3>Our Mission</h3></a>
                        <p>We work to enable client satisfaction with the support of our hardworking team and not expecting awards in the process. We strive for perfection with a humble approach. Expand the services from national to international. We aim to provide our services in multiple languages. May we enlarge our services to provide more employment is our goal.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<section class="service-style-two about-page">
    <div class="overlay"></div>
    <img src="img/what-we-do-2-1.jpg" class="background-right" alt="Awesome Image"/>
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="service-content">
                    <span>What we do</span>
                    <h2>You’ll get a <br />perfect fit for <br />your business.</h2>
                    <p>Handing out a business card is often the first impression people take of your business, so you need to get it right look and place. To spread your business well you must create perfect advertisement with proper fonts and suitable platform to advertise. </p>
                </div>
            </div>
        <div class="col-md-6">
                <div class="price-feature-box">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <div class="price-feature">
                                <div class="circle-box">
                                    <div class="circle" data-size="195" data-value="0.7" data-color="#2983C4">
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="content">
                                                <p>8.99%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="service-details.php"><h3>Bulk Ad</h3></a>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="price-feature">
                                <div class="circle-box">
                                    <div class="circle" data-size="195" data-value="0.85" data-color="#2983C4">
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="content">
                                                <p>9.99%</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <a href="service-details.php"><h3>Hoardings</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5">
                <div class="we-believe-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="img/we-belive-in-1-1.jpg" alt="Awesome Image"/>
                            </div>
                            <div class="text-box">
                                <h3>We believe in the <br /> power of great <br /> design</h3>
                                <p>Design helps us to figure out: from the posters we use, to the area we advertise in, to the advertises of client we prosper. </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="img/we-belive-in-1-2.jpg" alt="Awesome Image"/>
                            </div>
                            <div class="text-box">
                                <h3>We believe in the <br /> power of great <br /> design</h3>
                                <p>Designing depends on client, from <br>where to advertise,to how the size of the hoardings it be.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="faq-content">
                    <div class="title">
                        <span>Question and answers</span>
                        <h2>Frequently <br />Asked Questions</h2>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>How can I get mass clients after Advertising ?</h4>
                            </div>
                            <div class="accrodion-content">
                                
                                <p>The number of clients may depends on the desgining and area of the advertisement. The better the desgining, the attractive your advertisement is.Select the place of advertising wisely.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>How can I advertise my company in small scale area ?</h4>
                            </div>
                            <div class="accrodion-content">
                                
                                <p>Using the Pamphlets the client may advertise in the particular area.Pamphlets may varies in different terms such as glossy,matte or custom.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can I get estimation cost for any type of advertisement ?</h4>
                            </div>
                            <div class="accrodion-content">
                               
                                <p>The final cost depends on which turnaround time and quantity you've selected at checkout - you can get an accurate count in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Need to survey my advertisement ?</h4>
                            </div>
                            <div class="accrodion-content">
                                
                                <p>The final look of client's advertisement can be visible through drag and drop and even resizing the image.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<script src="js/circle-progress.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>