<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Client</title>
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
            </div>

        </nav>
        
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Add Client
                            </div>
                            <form action="client_insert.php" method="POST" enctype="multipart/form-data">
                            <div class="panel-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Enter  Client Name</label>
                                <input type="text" name="client_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Client Name" />
                              </div>
                                
                               <div class="form-group">
                                
                                <label for="exampleInputFile">Client Image</label>
                                <input type="file" name="fileToUpload">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                             
                            
                            <input type="submit" name="btn_sub" class="btn btn-primary">
                          </a>
                      </div>
                  </form>
            </div>
        </div>
     </div>        </div>
       
    </div> <br><br><br><br><br><br><br><br><br><br> 
    
    <footer >
        &copy; 2019 Copyright 2019 Created by<a href="http://www.designbootstrap.com/" target="_blank">Ad Mart Team</a>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
