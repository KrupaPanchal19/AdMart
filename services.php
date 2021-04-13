<?php
    session_start();
    
        require 'dbconnects.php';
        $cateid = $_GET['cateid'];
        $_SESSION['cateid']=$_GET['cateid'];
        if(!isset($_SESSION['id']))
        {  
          header("location:login.php");  
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
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div>
<?php 
    require 'header.php';
?>
<section class="page-title">
    <div class="thm-container">
        <h3>
            <?php
        $ss = "SELECT * FROM cate_tble WHERE `cate_id`='".$cateid."'";
        $rss = mysqli_query($conn,$ss);
        $roww = mysqli_fetch_assoc($rss);
        echo $roww['cate_name'];
        ?>
        </h3>        
    </div>
</section>
<br><br>
<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index.php">Homepage</a></li>
            <li><span class="sep">-</span></li>
            <li><span>   
                <?php
                     $ss = "SELECT * FROM cate_tble WHERE `cate_id`='".$cateid."'";
                    $rss = mysqli_query($conn,$ss);
                    $roww = mysqli_fetch_assoc($rss);
                    echo $roww['cate_name'];
                         ?>
               </span>
           </li>
        </ul>
    </div>
</div>
<br><br>
<div id="bulk">
</div>

<div id="led">
<section class="service-style-three sec-pad">
    <div class="thm-container">
        <div class="row masonary-layout">
            <?php
                $select_typ = "SELECT * FROM subcate_tbl WHERE `cate_id`='".$cateid."'";
                $rs_typ = mysqli_query($conn,$select_typ);
                if(mysqli_num_rows($rs_typ)>0)
                {
                    while($row_typ=mysqli_fetch_assoc($rs_typ))
                    {
                        ?>

           <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="single-service-three">
                    
                    <div class="img-box">
                        <img src="<?php echo $row_typ['img_src'];?>"height="350" alt="Awesome Image"/>
                    </div>
                    <div class="text-box hvr-bounce-to-bottom">
                        
                        <a href="service-details.php?id=<?php echo $row_typ['s_id'];?>"><h3><?php echo $row_typ['subcate_name'];?></h3></a>
                            
                        <a href="service-details.php?id=<?php echo $row_typ['s_id'];?>" class="read-more fas fa-angle-right"></a>
                    </div>
                </div>
            </div>
                        <?php
                    }
                }
            ?>
         </div>
        <nav aria-label="Page navigation" class="text-center">
            <ul class="pagination clearfix">
                </ul>
        </nav>
    </div>
</section>
</div>

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