<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Category</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">Ad Mart 

                </a>
            </div>

            <div class="notifications-wrapper">
                <ul class="nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                         </a>
                        <ul class="dropdown-menu dropdown-user">
                      
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
            </ul>
            </div>
        </nav>
        
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/pro2.jpeg" class="img-circle" />
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Palak Mehta </strong></a>
                    </li>

                    <li>
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage User <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level"> 
                        <li>
                                <a href="viewuser.php"><i class="fa fa-bullhorn "></i>View User</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addcate.php"><i class="fa fa-cogs "></i>Add Category</a>
                            </li>
                             <li>
                                <a href="viewcat.php"><i class="fa fa-bullhorn "></i>View Category</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Sub-Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addsubcat.php"><i class="fa fa-cogs "></i>Add Sub-Category</a>
                            </li>
                             <li>
                                <a href="viewsubcat.php"><i class="fa fa-bullhorn "></i>View Sub-Category</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Client <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addclient.php"><i class="fa fa-cogs "></i>Add Client</a>
                            </li>
                             <li>
                                <a href="viewclient.php"><i class="fa fa-bullhorn "></i>View Client</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Contact <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addcont.php"><i class="fa fa-cogs "></i>Add Contact</a>
                            </li>
                             <li>
                                <a href="viewcont.php"><i class="fa fa-bullhorn "></i>View Contact</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Feedback <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewfeedback.php"><i class="fa fa-bullhorn "></i>View Feedback</a>
                            </li>
                        </ul>
                    </li>
                    
                  
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Quotation <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a href="viewquotation.php"><i class="fa fa-bullhorn "></i>View Quotation</a>
                            </li>
                        </ul>
                    </li>
    
                   <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage City <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addcity.php"><i class="fa fa-cogs "></i>Add City</a>
                            </li>
                             <li>
                                <a href="viewcity.php"><i class="fa fa-bullhorn "></i>View City</a>
                            </li>
                        </ul>
                    </li>
               
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage State <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addstate.php"><i class="fa fa-cogs "></i>Add State</a>
                            </li>
                             <li>
                                <a href="viewstate.php"><i class="fa fa-bullhorn "></i>View State</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Security Question <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addseq.php"><i class="fa fa-cogs "></i>Add Security Question</a>
                            </li>
                             <li>
                                <a href="viewseq.php"><i class="fa fa-bullhorn "></i>View Security Question</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Category</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                           
                                        <?php
                                            require 'dbconnects.php';
                                            $id=$_GET['c_id'];
                                            $qry="SELECT * FROM cont_tbl WHERE  c_id =$id";

                                            $rs=mysqli_query($conn,$qry);
                                            ?>

                                                    
                                                        <tr>
                                                            <td>Contact_Id:</td>
                                                            <td>Name:</td>
                                                            <td>Contact no:</td>
                                                            <td>Email_id:</td>
                                                            <td>City_Name:</td>
                                                            <td>Description:</td>
                                                        </tr>
                                                    </thead>
                                                    <?php $row=mysqli_fetch_assoc($rs)?>
                                                    <form action="updatecont.php" method="post">
                                                        <tr>
                <td><?php echo $row['c_id']?></td>
                <input type="hidden" name="c_id" value="<?php echo $row['c_id']?>">
                <td><input type="text" name="name" value="<?php echo $row['name']?>"></td>
                <td><input type="text" name="contact_no" value="<?php echo $row['contact_no']?>"></td>
                <td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
				<td><input type="text" name="city" value="<?php echo $row['city']?>"></td>
				<td><input type="text" name="description" value="<?php echo $row['description']?>"></td>
				 <td><input type="submit" name="submit" value="submit"> </td>
                </form>
                
               
            </tr>

</body>
</html>
