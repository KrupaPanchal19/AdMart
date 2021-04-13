<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Ad Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
session_start(); 
require 'header.php'?>
<section class="page-title">
    <div class="thm-container">
        <h3>Our Clientel</h3>        
    </div>
</section>
<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index.php">Homepage</a></li>
            <li><span class="sep">-</span></li>
            <li><span>Clientel</span></li>
        </ul>
    </div>
</div>

<br>
<section class="project-details-page sec-pad">
    <div class="thm-container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="img-box-wrapper">
                    <div class="row">
                            <?php
                                require 'dbconnects.php';
                                $qry="SELECT * FROM client_tbl WHERE isactive =1 OR isactive =0";
                                $rs=mysqli_query($conn,$qry);

                                 if (mysqli_num_rows($rs)>0)
                                 {
                                    while ($row=mysqli_fetch_assoc($rs)) {
                                 ?>
                                 <div class="col-sm-3">
                                        <tr>
                                            <td><img src="video_cms12/<?php echo $row['client_image']?>" height="237" width="270"></td>
                                        </tr>
                                    
                        </div>              
                             <?php 
                                }
                        }
                        ?>
                       </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<br>
<footer class="footer">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-widget about-widget">
					<div class="title">
						<h3>About Ad Mart</h3>
					</div>
					<p>Ad Mart consolidates the scope of urban advertising with different mediums and highly targeted delivery for brands and products. We set the stage for commanding high-density consumer exposure with high impact mediums for the traditional out-of-home advertising in the form of Hoardings, Railway Station Promotion, Transits Boards and Scrollers.</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-widget links-widget explore">
					<div class="title">
						<h3>Explore</h3>
					</div>
					<ul class="link-list">
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="client.php">Client</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                    </ul>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="footer-widget contact-widget">
					<div class="title">
						<h3>Contact</h3>
					</div>
					<p>+91 8980147554</p>
					<p>needhelp@admartx.com </p>
					<p>317 Heritage Horizon,CG Road, Ahmedabad</p>
				</div>
			</div>
		</div>
	</div>
</footer>
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