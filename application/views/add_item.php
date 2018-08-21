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
                        <li class="nav-item hidden-sm-down search-box">
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']?></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="<?php echo base_url();?>index.php/Home/logout"><i class="fa fa-power-off"></i> Logout</a></li>
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
                        </li>
                        
                        <li class="nav-label">Users</li>
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_customers">Search Customer</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Admin/load_newreg">User Settings</a></li>
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
                    <h3 class="text-primary">Stock Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Stock Management</li>
                        <li class="breadcrumb-item active">Add New Item</li>
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
                            <?php if(! is_null($msg)) echo $msg;?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <center>
                                <div class="card-title">
                                <h4>Add New Category</h4>
                                <br>
                                <br>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url();?>index.php/Admin/add_category" method="POST" id="regform">

                                        <input type="text" name="catname" placeholder="Category Name" width="500" /><br><br><br><br>
                                        <button type="submit" value="new_category"><font color="Green">Add Category</font></button>
                                        <button type="submit" value="new_category">Cancel</button>                                   
                                      </form>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <center>
                                <div class="card-title">
                                <h4>Add New Product</h4>
                                <br>
                                <br>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url();?>index.php/Admin/new_item" method="POST" id="regform">

                                        <!-- <select name="catname"/>
                                            <option value="title1">Select Category</option>
                                            <?php
                                                // foreach ($category as $row){
                                                // echo "<option value='" . $row->catid ."'>" . $row->catname."</option>";
                                                //}
                                            ?>
                                        </select> -->
                                        <?php echo form_dropdown('category', $category, '', 'class="form-control"');?>
                                        <br><br>
                                        <input type="text" name="itemname" placeholder="Item Name"/><br><br>
                                        <input type="text" name="avbqty" placeholder="Available Quantity"/><br><br>
                                        <input type="text" name="itemprice" placeholder="Item Price"/><br><br>
                                        <input type="text" name="color" placeholder="Color"/><br><br><br>
                                        <button type="submit" value="new_register"><font color="Green">Insert</font></button>
                                        <button type="submit" value="new_register">Cancel</button>

                                                                           
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


</body>
</html>