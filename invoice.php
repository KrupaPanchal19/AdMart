
<?php
require 'dbconnects.php';
session_start();
$id=$_SESSION['id'];
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
    <link rel="javascript" href="js/jquery.min.js">
    <script>
function myFunction() {
  window.print();
}
</script>
</head>
<body class="active-preloader-ovh">

    <div class="preloader"><div class="spinner"></div></div>
<?php
    require 'header.php';
?>
   <section class="page-title">
    <div class="thm-container">
        <h3>Quotation</h3>        
    </div>
</section>
<br><br>
<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index-2.php">Homepage</a></li>
            <li><span class="sep">-</span></li>
        <li><span>Quotation</span></li>
    </ul>
</div>
</div>

<section class="about-section sec-pad">
    <form action="submit_quatation.php" mehtod="post">
    <div class="thm-container">
        <div class="row masonary-layout">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-about">
                    <?php
                        $qry="SELECT * FROM user_tble WHERE `id`=$id";
                        $rs=mysqli_query($conn,$qry);
                        $row=mysqli_fetch_assoc($rs);
                    ?>
                    <div style="margin:5% 40% 0% 33%;float:left; width:500px; box-shadow:0 0 3px #aaa; height:auto;color:#666;">
   <div style="width:100%; padding:10px; float:left; background:#1ca8dd; color:#fff; font-size:30px; text-align:center;">
    Final Quatation
   </div>
    <div style="width:100%; padding:0px 0px;border-bottom:1px solid rgba(0,0,0,0.2);float:left;">
        <div style="width:30%; float:left;padding:10px;">
           
           <span style="font-size:14px;float:right; width:100%; ">
                <b>FirstName: <?php echo $row['firstname']?>
            </span> 
             <span style="font-size:14px;float:right;width:100%;padding-top: 20px;">
               <b>Address: <?php echo $row['Address'];?>
            </span>
            
        </div>
        
        <div style="width:40%; float:right;padding:">
            <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
                <b>Date : <?php echo $row['doi'];?>
            </span>
            <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
               <b>Quatation No. : <?php
                            $q=rand(00001,99999);
                             $Q=$id.$q;
                             $_SESSION['quatation']=$Q;
                             echo $Q;
                             ?>
            </span>
        </div>
    </div>
    <div style="width:100%; padding:0px; float:left;">
     
          <div style="width:100%;float:left;background:#efefef;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;font-weight:600;">
            Decription
           </span>
         <span style="font-weight:600;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
         Amount
        </span>
      </div>
         <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Service            
            <span style="font-size:10px; float:left; width:100%;">
                
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            <?php 
            echo $_POST['cat_name'];
            $_SESSION['cat_name']=$_POST['cat_name'];?>
        </span>
      </div>
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Quantity            
            <span style="font-size:10px; float:left; width:100%;">
                
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            <?php 
            echo $_POST['qty'];?>
        </span>
      </div>      
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
           Month Duration          
            <span style="font-size:10px; float:left; width:100%;">
                
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            <?php 
            echo $_POST['duration'];?> Month
        </span>
      </div>
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
           Price Per Postcard          
            <span style="font-size:10px; float:left; width:100%;">
                
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            <?php echo $_POST['price'];?> 
        </span>
      </div>
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Your Final Price
          
            
            <span style="font-size:10px; float:left; width:100%;">
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            <?php 
                  $a=$_POST['duration'];
                  $_SESSION['duration']=$_POST['duration'];
                  $b=$_POST['qty'];
                  $_SESSION['qty']=$_POST['qty'];
                  $c=$_POST['price'];
                  $_SESSION['price']=$_POST['price'];
                  $d=$b*$c*$a;
                  $ad_id=$_POST['ad_id'];
                  $_SESSION['ad_id']=$_POST['ad_id'];
                    echo $d;

            ?> INR
        </span>
      </div>
       <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            GST            
            <span style="font-size:10px; float:left; width:100%;">
                
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            15%
        </span>
      </div>
      
           <div style="width:100%;float:left; background:#fff;">
           
         <span style="font-weight:600;float:right;padding:10px 0px;width:40%;color:#666;text-align:center;">
           Total : <?php

           $g=15;
           $f=100; 
           $e=$d*15/100;
           $h=$e+$d;
           echo $h;  ?> INR
        </span>
      </div>

    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row"><center>
        <input type="submit" value="Confirm Quatation" class="btn-primary btn center-block" id="btn_submit">
        </center>
    </div>
</form>
</section>
<br/>
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
