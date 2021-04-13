<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View User</title>
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
                <a  class="navbar-brand" href="index..php">Ad Mart </a>
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
                        <a class="active-menu"  href="dashboard..php"><i class="fa fa-dashboard "></i>Dashboard</a>
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
            </div>

        </nav>
        
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View User</h1>
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

                                        $qry="SELECT * FROM user_tble WHERE isactive =1 OR isactive =0";
                                        $rs=mysqli_query($conn,$qry);
                                        ?>      
                                                 <tr>
                                                        
                                                        <td>FirstName:</td>
                                                        <td>LastName:</td>
                                                        <td>Email:</td>
                                                        <td>Mobile:</td>
                                                        <td>Gender:</td>
                                                        <td>Address:</td>
                                                        <td>Security Question:</td>
                                                        <td>Security Answer:</td>
                                                        <td>isactive:</td>
                                                        <td>Status</td>
                                                        <td>Edit</td>
                                                        <td>Delete</td>
                                                    </tr>
                                        </thead>
                                         <tbody>
        <?php
            if (mysqli_num_rows($rs)>0)
             {
                while ($row=mysqli_fetch_assoc($rs)) {
                
                
                if($row['usertype']==2)
                {
            ?>
            <tr>
                
                <td><?php echo $row['firstname']?></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobilenum']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['Address']?></td>
                <td><?php echo $row['sec_que']?></td>
                <td><?php echo $row['sec_ans']?></td>
                <td><?php echo $row['isactive']?></td>
                <td><a href="statuschange.php ?id=<?php echo $row['id']?>">Change</td>
                <td><a href="edit.php ?id=<?php echo $row['id']?>">Edit</td>
                <td><a href="delete.php ?id=<?php echo $row['id']?>">Delete</td>
            </tr>
            <?php 
                }
             } 
        }
        ?>
        </tbody>
              </table>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
 </div> <br><br><br><br><br><br><br><br><br><br> 
    <footer >
        &copy; 2019 Copyright 2019 Created by<a href="http://www.designbootstrap.com/" target="_blank">Ad Mart Team</a>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</php>