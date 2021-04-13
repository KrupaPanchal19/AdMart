    <?php
    session_start();  
    require 'dbconnects.php';
    $id1=$_SESSION['cateid'];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <script type="text/javascript" src="js/jquery.js"></script>
    <style type="text/css">
        #workbox{
            width: 401px;
            height: 511px;
            position: relative;
            border: 5px #000 solid;
            overflow: hidden;
        }
        #phone{
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        #drag-resize-me{
            position: absolute;
            top: 0;
            left: 0;
        }
        #handle{
            border: 1px #ccc solid;
        }
    </style>
    <head>
        <meta charset="UTF-8" />
        <title>Ad Mart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

       
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       

       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
          
            $(function(){
                $('#handle').css('height',$('#drag-resize-me').height()).css('width',$('#drag-resize-me').width());
                $("#handle").draggable({
                    drag: function(event,ui)
                    {
                        $('#drag-resize-me').css('left',ui.position.left).css('top',ui.position.top);
                    }
                });
                $("#handle").resizable({
                    alsoResize:'#drag-resize-me',
                    handles: 'all',
                    resize: function(event,ui)
                    {
                        $('#drag-resize-me').css('left',ui.position.left).css('top',ui.position.top);
                    }
                });
            });
        </script>
        <style type="text/css">
        #workbox{
            width: 401px;
            height: 511px;
            position: relative;
            border: 5px #000 solid;
            overflow: hidden;
        }
        #phone{
            position: absolute;
            top: 0;
            left: 0;
        }
        #drag-resize-me{
            position: absolute;
            top: 0;
            left: 0;
        }
        #handle{
            border: 1px #ccc solid;
        }
        .main
        {
            resize: both;
            overflow: auto;
        }
    </style>
    </head>
    <body class="active-preloader-ovh">

        <div class="preloader"><div class="spinner"></div></div>
        <?php
            require 'header.php';
        ?>
        <section class="page-title">
            <div class="thm-container">
                <h3>Service</h3>        
            </div>
        </section>
        <br><br>
        <div class="breadcumb-wrapper">
            <div class="thm-container">
                <ul class="breadcumb">
                <li><a href="index.php">Homepage</a></li>
                <li><span class="sep">-</span></li>
          <li><span>Services</span></li>
        </ul>
    </div>
    </div>

    <br><br>
    <div id="aa" class="cll">
        
        <section class="service-details-design-option sec-pad">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="single-service-details-design-option">
                            <div class="img-box">
                                   <div class="">
                                   </div>
                                <?php
                                    $id=$_GET['id'];
                                   
                                    $qry="SELECT * FROM subcate_tbl WHERE `s_id`=$id";
                                 
                                    $rs = mysqli_query($conn,$qry);
                                    $row=mysqli_fetch_assoc($rs);
                                    ?>
                                    <section class="service-details-design-option sec-pad">
                                    <div class="thm-container">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-12">
                                                <div class="single-service-details-design-option">
                                                    <div id='workbox'>
                                                        <img src="http://tryimg.com/4/01.png" id="drag-resize-me" class="main" height="100px" width="100px" />
                                                        <img src="<?php echo $row['img'];?>"id="phone"/>

                                                    <div id="handle"></div>
                                                    </div>

                                <input type="file" name="file" id="upload">
                                <p style="color:red"> * Please Upload only png file</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>           
                                 <?php 
                                 ?>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-7">
                        <div class=""> 
                     <div class="design-guideline"> 
                     <div class="row"> 
                     <div class="col-sm-12"> 
                                <div class="guide-content"> 
                                    <center><h3><font size="5" color="tomato" font face="Candara">ExclusiVe AngLe</font> </h3></center>
                                     
                                    <p align="justify"><font size="5" color="black">Ad Mart provides the unique feature for visiblity of the client's Banner Advertisement.You can easily choose an image of your banner/poster from the button provided at the benath the image.Kindly choose only png file as menioned.This feature will definately help to check look of your banners/posters in fixed available space.</font></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                    </div>
                </div>
                <div>
            </div> 
        </div>
                
        </div>        
    </div>
        </section>
    </div>
   </div>
    <br><br>
    <section class="video-box-design-guide sec-pad pb0" style="margin-left: 320px">
        <div class="thm-container">
            <div class="sec-title text-center">
                
                <h3 style="padding-right: 350px"><font size="30" color="tomato">Totaliser</h3>
                
            </div>
            <div class="row">
                <form action="invoice.php?ad=1" method="post">
                <center><div class="col-md-8">
                    <div class="design-sizes">
                        <div class="title text-center">
                            <h3>Services</h3>
                        </div>
                        <div class="design-sizes-name-box">
                            <div class="single-design-sizes-name-box clearfix">
                                <span class="name"> Service</span>
                                <?php
                               
                                $qry1="SELECT * FROM cate_tble WHERE cate_id=$id1";
                                $rs1=mysqli_query($conn,$qry1);
                                $row1=mysqli_fetch_assoc($rs1);                        
                                ?>
                                <span class="size"><span class="size"><input type="text" name="c_n" value="<?php echo $row1['cate_name'];?>" class="form-control" disabled>
                                        <input type="hidden" name="cat_name" value="<?php echo $row1['cate_name'];?>" class="form-control"></span></span>
                 </div>
                <input type="hidden" name="catid" value="<?php echo $row1['cate_id']?>">
                            <div class="single-design-sizes-name-box clearfix">

                                <span class="name"> Quantity </span>
                                <span class="size"><input type="number" name="qty" class="form-control" style="margin-top: 10px;"></span>
                            </div>
                            <div class="single-design-sizes-name-box clearfix">
                                <span class="name"> Post per Poster </span>
                                <span class="size"><span class="size"><input type="text" name="aa" value="<?php echo $row1['price'];?>" class="form-control" disabled>
                                        <input type="hidden" name="price" value="<?php echo $row1['price'];?>" class="form-control"></span></span>
                            </div>
                            <div class="single-design-sizes-name-box clearfix">
                                <span class="name">Duration</span>
                                <span class="size"><select name="duration" class="form-control" style="margin-top: 10px;">

                                                <option value="1">1 Month</option>
                                                <option value="3">3 Months</option>
                                                <option value="6">6 Months</option>
                                                <option value="12">1 Year</option>
                                            </select></span>
                                            <input type="hidden" name="ad_id" value="<?php echo $_GET['id']?>">
                            </div>
                            <div class="single-design-sizes-name-box clearfix">
                                <input type="submit" name="btn_sub" class="thm-btn yellow-bg" value="SUBMIT NOW">
                            </div>
                            <div class="single-design-sizes-name-box clearfix">
                                <span class="size" name="f_price"><center>
                                        <?php
                                        if(isset($_GET['tl']))
                                        {
                                            echo $_GET['tl'];
                                        }
                                        ?>
                                    </center></span>
                            </div>
                        </div>
                    </div>
                </div></center>
            </form>
        </div>
    </section>
    <br>
    <section class="service-style-three sec-pad service-details-page">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Other services</span>
                <h3>Even More Good Stuff</h3>
                
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-three">
                        <div class="img-box">
                            <img src="img/bio.jpg" height="280" alt="Awesome Image"/>
                        </div>
                       <div class="text-box hvr-bounce-to-bottom">
                            <a href="service-details.html"><h3>Bicycle<br> Advertising</h3></a>
                            <div class="meta-info">
                            <br>    <p>Bicycle Advertising represents the advertising in the form of out-of-home advertising. It moves in particular areas as per the amount. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-three">
                        <div class="img-box">
                            <img src="img/pa.png" alt="Awesome Image"/>
                        </div>
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="service-details.html"><h3>Pamphlet Advertising</h3></a>
                            <div class="meta-info">
                             <br>   <p>Pamphlets may consist of a single sheet of paper printed on both sides, folded in half, it may varies in different form like glossy, matte or custom .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-three">
                        <div class="img-box">
                            <img src="img/aa.jpg" alt="Awesome Image"/>
                        </div>
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="service-details.html"><h3>TriCycle <br>Advertising</h3></a>
                            <div class="meta-info">
                               <br> <p>TriCycle advertising represents the moving advertising posters typically on three tiers. It also may varies based on simple and LED posters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="footer">
    	<div class="thm-container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="footer-widget about-widget">
    					<div class="title">
    						<h3>About  Ad Mart</h3>
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
            </div></div>
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
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
    <script type="text/javascript">
        $(document).on('change','#upload',function(e){
            e.preventDefault();
             var filePath = $(this).val();
             // alert(filePath);
             var tmppath = URL.createObjectURL(e.target.files[0]);
            // alert(tmppath);
            // alert("jkj");
            $("#drag-resize-me").attr("src", tmppath);
            $.ajax({
                url:"sircode.html?name=",
                enctype:"multipart/form-data",
                type:"post",
                data:data,
                processData:false,contentType:false,cache:false,
                success:function(data){
                    $(".abc").val($(data).val());
                    alert(data);
                    console.log(data);
                }
            })
        });
        $(document).ready(function(e){
            e.preventDefault();
            alert("hii");
        });
</script>
</body>
</html>
