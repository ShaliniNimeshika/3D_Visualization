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
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
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
                            </ul>
                        </li>

                        <li class="nav-label">Discussion Forum</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Discussions</span></a>
                        </li>
                        
                        <li class="nav-label">Users</li>
                        
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                
                                <!-- <li><a href="<?php echo base_url();?>index.php/Admin/load_updateuser">Update Customer Details</a></li> -->
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
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>00</h2>
                                    <p class="m-b-0">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>00</h2>
                                    <p class="m-b-0">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1</h2>
                                    <p class="m-b-0">Stores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                        <?php if(! is_null($users)) echo count($users);?>
                                    </h2>
                                    <p class="m-b-0">Registered Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <div class="col-lg-4"></div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <center>
                            <div class="card">
                            <div class="card-title">
                                <h4>Sales - Statistics </h4>
                                <br>
                            </div>
                            <div class="card-body browser">
                                <p class="f-w-600">No Sales Recently</p>
                                <!-- <p class="f-w-600">Black - Gent Trouser <span class="pull-right">85%</span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">White - Ladies blouse<span class="pull-right">90%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Pink - Ladies Frock<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Dark blue - Gents Shirt<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Gray - Ladies Skirt<span class="pull-right">65%</span></p>
                                <div class="progress m-b-30">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div> -->
                            </div>
                        </div>
                        </center>
                        <div class="col-lg-4"></div>
                    </div>
                    <!-- column -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Recent Orders </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Order ID</th>
                                            </tr>
                                        </thead>

                                        <!-- <tbody>
                                            <?php  
                                                foreach ($users as $row){ ?>
                                                <tr>  
                                                    <td><?php echo $row->first_name;?></td>  
                                                    <td><?php echo $row->last_name;?></td> 
                                                    <td><?php echo $row->email;?></td> 
                                                    <td><?php echo $row->telephone;?></td>  
                                                </tr>  
                                            <?php } ?>
                                        </tbody> -->
                                    </table>
                                    <br>
                                    <br>
                                    <p class="f-w-600">No Orders Recently</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
					<div class="col-lg-8">
						<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-title">
									<h4>Message </h4>
								</div>
								<div class="recent-comment">
									<div class="media">
										<div class="media-left">
											<a href="#"><img alt="..." src="<?php echo base_url();?>assests/admin_panel/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">john doe</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. </p>
											<p class="comment-date">October 21, 2018</p>
										</div>
									</div>
									<div class="media">
										<div class="media-left">
											<a href="#"><img alt="..." src="<?php echo base_url();?>assests/admin_panel/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">john doe</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. </p>
											<p class="comment-date">October 21, 2018</p>
										</div>
									</div>

									<div class="media">
										<div class="media-left">
											<a href="#"><img alt="..." src="<?php echo base_url();?>assests/admin_panel/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">john doe</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. </p>
											<p class="comment-date">October 21, 2018</p>
										</div>
									</div>

									<div class="media no-border">
										<div class="media-left">
											<a href="#"><img alt="..." src="<?php echo base_url();?>assests/admin_panel/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Mr. Michael</h4>
											<p>Cras sit amet nibh libero, in gravida nulla. </p>
											<div class="comment-date">October 21, 2018</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /# card -->
						</div>
						<!-- /# column -->
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="year-calendar">
                                        <div class="pignose-calendar pignose-calendar-blue pignose-calendar-default">						<div class="pignose-calendar-top">													
                                                <a href="#" class="pignose-calendar-top-nav pignose-calendar-top-prev"><span class="arrow-left"></span></a>						

                                                <div class="pignose-calendar-top-date">														<span class="pignose-calendar-top-month">August</span>									<span class="pignose-calendar-top-year">2018</span>									</div>													

                                                <a href="#" class="pignose-calendar-top-nav pignose-calendar-top-next"><span class="arrow-right"></span></a>												
                                            </div>												

                                            <div class="pignose-calendar-header">
                                                <div class="pignose-calendar-week pignose-calendar-week-sun">SUN</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-mon">MON</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-tue">TUE</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-wed">WED</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-thu">THU</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-fri">FRI</div>
                                                <div class="pignose-calendar-week pignose-calendar-week-sat">SAT</div>
                                            </div>												
                                            <div class="pignose-calendar-body"><div class="pignose-calendar-row"><div class="pignose-calendar-unit pignose-calendar-unit-sun"></div><div class="pignose-calendar-unit pignose-calendar-unit-mon"></div><div class="pignose-calendar-unit pignose-calendar-unit-tue"></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-wed" data-date="2018-08-01"><a href="#">1</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-thu" data-date="2018-08-02"><a href="#">2</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-fri" data-date="2018-08-03"><a href="#">3</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sat" data-date="2018-08-04"><a href="#">4</a></div></div><div class="pignose-calendar-row"><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sun" data-date="2018-08-05"><a href="#">5</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-mon" data-date="2018-08-06"><a href="#">6</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-tue" data-date="2018-08-07"><a href="#">7</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-wed" data-date="2018-08-08"><a href="#">8</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-thu" data-date="2018-08-09"><a href="#">9</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-fri" data-date="2018-08-10"><a href="#">10</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sat" data-date="2018-08-11"><a href="#">11</a></div></div><div class="pignose-calendar-row"><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sun" data-date="2018-08-12"><a href="#">12</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-mon" data-date="2018-08-13"><a href="#">13</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-tue" data-date="2018-08-14"><a href="#">14</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-wed pignose-calendar-unit-active pignose-calendar-unit-first-active" data-date="2018-08-15"><a href="#">15</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-thu" data-date="2018-08-16"><a href="#">16</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-fri" data-date="2018-08-17"><a href="#">17</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sat" data-date="2018-08-18"><a href="#">18</a></div></div><div class="pignose-calendar-row"><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sun" data-date="2018-08-19"><a href="#">19</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-mon" data-date="2018-08-20"><a href="#">20</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-tue" data-date="2018-08-21"><a href="#">21</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-wed" data-date="2018-08-22"><a href="#">22</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-thu" data-date="2018-08-23"><a href="#">23</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-fri" data-date="2018-08-24"><a href="#">24</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sat" data-date="2018-08-25"><a href="#">25</a></div></div><div class="pignose-calendar-row"><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-sun" data-date="2018-08-26"><a href="#">26</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-mon" data-date="2018-08-27"><a href="#">27</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-tue" data-date="2018-08-28"><a href="#">28</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-wed" data-date="2018-08-29"><a href="#">29</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-thu" data-date="2018-08-30"><a href="#">30</a></div><div class="pignose-calendar-unit pignose-calendar-unit-date pignose-calendar-unit-fri" data-date="2018-08-31"><a href="#">31</a></div><div class="pignose-calendar-unit pignose-calendar-unit-sat"></div></div></div>											</div></div>
								</div>
							</div>
						</div>


						</div>
					</div>

				    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Todo</h4>
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                        <label>
															<input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
															<a href="#" class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked=""><i class="bg-success"></i><span>Creating component page</span>
															<a href="#" class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked=""><i class="bg-warning"></i><span>Follow back those who follow you</span>
															<a href="#" class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked=""><i class="bg-danger"></i><span>Design One page theme</span>
															<a href="#" class="ti-close"></a>
														</label>
                                                    </li>

                                                    <li>
                                                        <label>
															<input type="checkbox" checked=""><i class="bg-success"></i><span>Creating component page</span>
															<a href="#" class="ti-close"></a>
														</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Type here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
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