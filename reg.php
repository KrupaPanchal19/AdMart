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
                        </ul>
                    </li>
                    <li> 
                        <a href="#">Client</a> 
                        
                    </li>
                    <li> <a href="feedback.php">Feedback</a> </li>
                                <li> <a href="contact.php">Contact Us</a> </li>
                </ul>      
            </div>
           
        </div>
    </nav>   
</header>
<section class="contact-section sec-pad" style="background-color:#279ca8">
     <div class="thm-container">
         <div class="row">
                 <div class="thm-container">
                     <div class="sec-title text-center">
                 <div class="col-md-8">
     <div class="contact-form-content contact-form" >
                     <div class="title">
                         <span></span>
                         <h2>Registration</h2>
                     </div>
                     <form action="dbprocess.php" method="GET">
                         

                         <input type="text" name="firstname" placeholder="Your First Name"/>

                         <input type="text" name="lastname" placeholder="Your Last Name"/>
                         
                         <input type="password" name="password" placeholder="Your Password"/>

                         
                         <input type="email" name="email" placeholder="Your email address" />

                         <input type="tel" name="mobilenum" placeholder="Your contact number" />
                           <select name="question" class="form-control" id="exampleInputEmail1">
                                    <option>--Security Question--</option>                       <?php
                                    require 'dbconnects.php';
                                    $qry="SELECT * FROM securityque_tbl where isactive=1";
                                    $rs=mysqli_query($conn,$qry);
                                    if (mysqli_num_rows($rs)>0)     
                                    {
                                        while ($row=mysqli_fetch_assoc($rs)) 
                                        {
                                        ?>                       
                                    <option value="<?php echo $row['s_id']; ?>"><?php echo $row['question']?></option>
                            <?php
                                    }
                                }
                            ?>         
                                 </select> 
                        </ul>
                    </li>

                         <input type="text" name="sec_ans" placeholder="Your security answer" />
                         <table>
                            <tr>
                                <td >
                                    <input type="radio" name="gender" value="Male" size="3"  style="width: 20px;" />
                                </td>
                                <td width="100px"><label>Male</label></td> &nbsp;&nbsp;&nbsp;
                                <td>
                                    <input type="radio" name="gender" value="Female" style="width: 20px;"/>    
                                </td>
                                <td><label>Female</label></td>
                            </tr>
                            <tr>
                                
                         
                            </tr>
                                
                         </table>

                         

                         <textarea name="Address" placeholder="Your Address"></textarea>

                         <button type="submit" name="btn_sub"class="thm-btn yellow-bg"><a href="login.php"></a>Submit Now</button>
</section>
</form>
                        <section class="what-we-do sec-pad">
                                   
                                    
                                    
                                </div>
                          
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
</body>
</html>