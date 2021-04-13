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
<body class="active-preloader-ovh" ">

<div class="preloader"><div class="spinner"></div></div>



<?php 
session_start();
require 'header.php'?>
<section class="contact-section sec-pad">
     <div class="thm-container"style="background-color:#279ca8;">
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content contact-form">
                     <div class="title">
                         <span>Send Message</span>
                         <h2>Contact with us</h2>
                     </div>
                  
                     <form action="cont_insert.php"  method="GET" class="">
                         <input type="text" maxlength="25" name="name" placeholder="Your full name" />
                         <input type="tel" maxlength="15" minlength="10" name="contact_no" placeholder="Your contact number" />
                         <input type="email" name="email" placeholder="Your email address" />
                         <select name="id" >
                            <option> City</option>
                            <?php
                                require 'dbconnects.php';
                                $qry="SELECT * FROM city_tble where isactive=1";
                                $rs=mysqli_query($conn,$qry);
                                ?>
                                <?php
                                if (mysqli_num_rows($rs)>0) 
                                {
                                    while ($row=mysqli_fetch_assoc($rs)) 
                                    {
                               ?>                       
                                    <option><a href= "<?php echo $row['city_name']?>.php"> <?php echo $row['city_name'];?></option>
                            <?php
                                    }
                                }
                            ?>
                            </ul>
                        </select>
                    </li>
                         <textarea name="description" placeholder="What you are looking for?"></textarea>
                         <button type="submit"  name="btn_sub"class="thm-btn yellow-bg">Submit Now</button>
                         <div class="form-result"></div>
                     </form>
                 </div>
             </div>
             <!-- <div class="col-md-4"> -->
                 <div class="contact-info text-center">
                     <div class="title text-center">
                        <span style="color: white;">Contact info</span>
                        <h2>Details</h2>
                     </div>
                     <div class="single-contact-info">
                         <h4>Address</h4>
                         <p style="color: white;">317 Heritage Horizon,<br />CG Road, Ahmedabad</p>
                     </div>
                     <div class="single-contact-info">
                         <h4>Phone</h4>
                         <p style="color: white;">Local: 02717-294174 <br /> Mobile: +91 8980143661</p>
                     </div>
                     <div class="single-contact-info">
                         <h4>Email</h4>
                         <p style="color: white;">needhelp@admartx.com <br /> inquiry@admart.com</p>
                     </div>
                     <div class="single-contact-info">
                         <h4>Follow</h4>
                         <div class="social">
                            <a href="#" class="fab fa-twitter hvr-pulse"style="background-color: #31cffe;"></a><a href="#" class="fab fa-pinterest hvr-pulse"></a>
                            <a href="#" class="fab fa-facebook-f hvr-pulse"></a>
                            <a href="#" class="fab fa-youtube hvr-pulse"></a>
                        </div>
                     </div>
                 </div>
             <!-- </div> -->
         </div>
     </div>
 </section>
 
<div class="footer-bottom">
	<div class="thm-container clearfix">
		<div class="pull-left copy-text">
			<p>&copy; Copyright 2019 Created by <a href="#">Ad Mart Team</a></p>
		</div>
		<div class="social-box pull-right">
            <a href="#" class="fab fa-twitter hvr-pulse"style="background-color: #31cffe;"></a>
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