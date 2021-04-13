<?php
  require 'dbconnects.php';

    session_start();
if(isset($_SESSION['id']))
{
  $id=$_SESSION['id'];  
}
?>

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
</head><body class="active-preloader-ovh">
<div class="preloader"><div class="spinner"></div></div>

<?php 
require 'header.php'?>

<section class="contact-section sec-pad"style="background-color:#279ca8">
     <div class="thm-container">
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content contact-form"  >
                     <div class="title">
                         <span></span>
                         <h2>Give Valuable Feedback</h2>
                     </div>
                     <form action="compins.php" method="POST" >
                        
                        
                        <input type="text" name="user_name" maxlength="25" placeholder="Your User Name"  /></br>               
                         <input type="tel" maxlength="15" minlength="10" name="contact_no" placeholder="Your contact number"/></br>
                         <input type="email" name="email_id" placeholder="Your email address"  /></br>
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
                        </br>
                         
                         <textarea name="feedback" placeholder="Feedback Here"></textarea></br>
                         
                         <button type="submit"  name="btn_sub"class="thm-btn yellow-bg">Submit Now</button>
                         <div class="form-result"></div>
                     </form>
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