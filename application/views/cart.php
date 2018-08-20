<!DOCTYPE html>
<!-- saved from url=(0048) -->
<html lang="en" class="gr__colorlib_com">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <title>INOAC | Cart</title>
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
                        
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            
                        </li>
                        <!-- End Comment -->
                        
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']?></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"> Profile</a></li>
                                    <li><a href="#"> Cart</a></li>
                                    <li><a href="#"> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="min-height: 542px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">User Profile</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">User</li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                <h4>Cart </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Item Description</th>
                                                <th>Item Price</th>
                                                <th>Sub-Total</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                            </div>
                            <!-- <?php if(! is_null($msg)) echo $msg;?> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <button>Purchase</button>
                                <button>Remove</button>
                            </div>
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