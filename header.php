<header class="header home-page-one">
    <div class="container-fluid">
                       <div class="row" style="text-align: right;">
                        <div class="col-lg-11">
                       
                        <?php

                        require 'dbconnects.php';
                        if(isset($_SESSION['id']))
                        {
                            $id=$_SESSION['id'];
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
