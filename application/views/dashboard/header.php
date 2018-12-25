<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "Dashboard"; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!--CK editor -->
    <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>    


    <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery-2.2.4.js"></script>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <style>
  .results tr[visible='false'],
  .no-result{
    display:none;
  }

  .results tr[visible='true']{
    display:table-row;
  }

  .counter{
    padding:8px; 
    color:#ccc;
  }
  </style>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url(); ?>assets/dashboard/images/abc.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase"><?php echo $this->session->userdata('current_admin_name') ?></h2><span class="text-uppercase"><?php echo $this->session->userdata('session_role') ?></span>
          </div>
          <div class="sidenav-header-logo"><a href="" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href=""<?php echo site_url('Dashboard'); ?>"> <i class="icon-home"></i><span>Home</span></a></li>
            <div class="admin-menu">
                <ul id="side-admin-menu" class="side-menu list-unstyled"> 
                    <li> <a href="#pages-nav-list2" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Inventory Management</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                        <ul id="pages-nav-list2" class="collapse list-unstyled">
                            <li> <a href="<?php echo site_url('Dashboard/Category'); ?>">Category Management</a></li>
                            <li> <a href="<?php echo site_url('Dashboard/SubCategory'); ?>">Sub-Category Management</a></li>
                            <li><a href="<?php echo site_url('Dashboard/InsertProduct'); ?>">Product Management</a></li>
                            <li> <a href="<?php echo site_url('Dashboard/ProductList');?>">Product List Management</a></li>
                        </ul>
                    </li>
                    <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Order Management</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                    <ul id="pages-nav-list" class="collapse list-unstyled">
                        <li> <a href="<?php echo site_url('Orders/index'); ?>">New Orders</a></li>
                        <li> <a href="<?php echo site_url('Orders/ViewShippedOrders'); ?>">Shipped Orders</a></li>
                        <!-- <li> <a href="<?php echo site_url('Orders/ViewAbc'); ?>">Abc</a></li> -->

              
                    </ul>
                </ul>
            </div>
      
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a href="" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><span>E-commerce Solution </span><strong class="text-primary"> Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              
                <li class="nav-item"><a href="<?php echo base_url(); ?>login/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->