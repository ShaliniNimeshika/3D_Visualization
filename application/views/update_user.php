<!DOCTYPE html>
<!-- saved from url=(0048) -->
<html lang="en" class="gr__colorlib_com">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <title>INOAC | Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assests/admin_panel/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="<?php echo base_url();?>assests/admin_panel/semantic.ui.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/admin_panel/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/admin_panel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/admin_panel/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/admin_panel/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/admin_panel/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.css">
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>


</head>

<body class="fix-header fix-sidebar" data-gr-c-s-loaded="true">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b><img src="<?php echo base_url();?>assests/admin_panel/logo.png" alt="homepage" width="220" height="75" class="dark-logo"></b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->

                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu animated zoomIn">
                                
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url();?>assests/admin_panel/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url();?>assests/admin_panel/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url();?>assests/admin_panel/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url();?>assests/admin_panel/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']?></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active">
                    <ul id="sidebarnav" class="in">
                        <li class="nav-devider"></li>

                        <li class="nav-label">Home</li>
                        <li class="active"> <a class="has-arrow  " href="<?php echo base_url();?>index.php/Admin/load_dashboard" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>

                        <li class="nav-label">Orders</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Orders Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Search Order</a></li>
                                <li><a href="#">View Customers</a></li>
                                <li><a href="#">Placed Orders</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Discussion Forum</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Discussions</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Compose</a></li>
                                <li><a href="#">Sent</a></li>
                                <li><a href="#">Inbox</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-label">Users</li>
                        
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customer Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_newreg">New Registration</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_updateuser">Update Customer Details</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_customers">Search Customer</a></li>
                                <li><a href="#">Orders</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-label">Stores</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Stock Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_searchstock">Search Stock</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_additem">Add New Item</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_updateitem">Update Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>

            <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px; height: 425.325px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div></div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="min-height: 542px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Customer Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Customer Management</li>
                        <li class="breadcrumb-item active">Update</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                           <!--  <?php if(! is_null($msg)) echo $msg;?> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <center>
                                <div class="card-title">
                                <h4>Search User </h4>
                                <br>
                                <br>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url();?>index.php/Admin/user_search" method="POST" id="search_word">
                                  
                                        <input type="text" name="keyword" placeholder="Enter Email Address" />
                                        <button type="submit" value="search">Search</button>

                                    </form>

                                    <?php  
                                            if($users == null){

                                        ?>
                                        <label>First Name : </label><br>
                                        <label>Last Name : </label><br> 
                                        <label>Email : </label><br> 
                                        <label>Telephone : </label>

                                           <?php }else{


                                                foreach ($users as $row){ ?>
                                            
                                            

                                        <label>First Name : </label><?php echo $row->first_name;?><br>
                                        <label>Last Name : </label><?php echo $row->last_name;?><br> 
                                        <input name="uemail" type="hidden" value="<?php echo $row->email;?>">
                                        <label>Email : </label><?php echo $row->email;?><br> 
                                        <label>Telephone : </label><?php echo $row->telephone;?>  
                                    
                                        

                                        <?php }

                                    }

                                         ?>


                                        <button ><a href="<?php echo base_url();?>index.php/Admin/set_update">Set to Text </a></button>
                                </div>
                            </center>
                            <!-- <?php if(! is_null($msg)) echo $msg;?> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <center>
                                <div class="card-title">
                                <h4>Update User Details </h4>
                                <br>
                                <br>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url();?>index.php/Admin/user_update" method="POST" id="regform">

                                        <?php if($user==null) {?>
                                            <input type="text" name="fname"/><br><br>
                                            <input type="text" name="lname"/><br><br>
                                            <input type="text" name="telephone"/><br><br>
                                            <input type="email" name="email"/><br><br><br>
                                        <?php }  else { 
                                            foreach ($user as $rows){ ?>
                                                <input type="text" name="fname" value="<?php echo $rows->first_name;?>" /><br><br>
                                                <input type="text" name="lname" value="<?php echo $rows->last_name;?>" /><br><br>
                                                <input type="text" name="telephone" value="<?php echo $rows->telephone;?>" /><br><br>
                                                <input type="email" name="email" value="<?php echo $rows->email;?>" /><br><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                        <button type="submit" value="update">Update</button>
                                                                           
                                      </form>
                                </div>
                            </center>
                            <!-- <?php if(! is_null($msg)) echo $msg;?> -->
                        </div>
                    </div>
                </div>

            <!-- footer -->
            <footer class="footer"> 
                ©2018 All Rights Reserverd by <a href="#">INOAC Fashionline</a>
            </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script type="text/javascript" async="" src="<?php echo base_url();?>assests/admin_panel/analytics.js"></script><script src="<?php echo base_url();?>assests/admin_panel/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assests/admin_panel/popper.min.js"></script>
    <script src="<?php echo base_url();?>assests/admin_panel/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assests/admin_panel/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assests/admin_panel/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assests/admin_panel/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="<?php echo base_url();?>assests/admin_panel/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assests/admin_panel/morris.js"></script>
    <script src="<?php echo base_url();?>assests/admin_panel/dashboard1-init.js"></script>


	<script src="<?php echo base_url();?>assests/admin_panel/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url();?>assests/admin_panel/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url();?>assests/admin_panel/prism.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url();?>assests/admin_panel/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url();?>assests/admin_panel/pignose.init.js"></script>

    <script src="<?php echo base_url();?>assests/admin_panel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assests/admin_panel/owl.carousel-init.js"></script>
    <script src="<?php echo base_url();?>assests/admin_panel/scripts.js"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url();?>assests/admin_panel/custom.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="<?php echo base_url();?>assests/admin_panel/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body></html>