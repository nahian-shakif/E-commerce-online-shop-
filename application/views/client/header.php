<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo "Ecommerce Solution" ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url() ?>assets/client/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/style.css">
    <style type="text/css">
  
  #exTab1 .tab-content {
  color : black;
  /* background-color: #428bca; */
  padding : 5px 15px;
}

#exTab2 h3 {
  color : black;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : black;
  /* background-color: #428bca; */
  padding : 5px 15px;
}

	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login .close {
        position: absolute;
		top: -10px;
		right: -10px;
	}
	.modal-login h4 {
		color: #636363;
		text-align: center;
		font-size: 26px;
		margin-top: 0;
	}
	.modal-login .modal-content {
		color: #999;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
    }
	.modal-login .form-group {
		margin-bottom: 20px;
	}
	.modal-login label {
		font-weight: normal;
		font-size: 13px;
	}
	.modal-login .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
	}
	.modal-login .form-control:focus {
		border-color: #ccc;
	}
	.modal-login .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
		border-radius: 0;
	}
    .modal-login .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #179b81;
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer {
		color: #999;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -25px -25px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login a {
		color: #fff;
		text-decoration: underline;
	}
	.modal-login a:hover {
		text-decoration: none;
	}
	.modal-login a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.modal-login a:hover {
		text-decoration: underline;
	}
	.modal-login .fa {
		font-size: 21px;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
    h1 {
  color: #fff;
  font-weight: 500;
  padding: 30px;
  text-shadow: 0 3px 3px #2b3c4e;
}
.single-product-wrapper .product-img img {
    /* width: 100%; */
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    width: 1000px !important;
    height: 300px !important;
}
/* input {
  display: none;
}

label {
  cursor: pointer;
  font-size: 40px;
  color: yellow;
  display: block;
  width: 50px;
  height: 50px;
  line-height: 60px;
  text-align: center;
  float: left;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  text-shadow: 0 3px 3px #2b3c4e;
}
label:hover {
  font-size: 50px;
  color: #fff;
  text-shadow: 0 0 5px #b9c9d8;
}
label:before {
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  margin-top: 0;
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  content: "\f005";
}

input:checked + label ~ label:before {
  content: "\f006";
}

#wrapper {
  display: inline-block;
}
#wrapper:hover label:before {
  content: "\f005";
}
#wrapper:hover label:hover ~ label:before {
  content: "\f006";
} */


</style>

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>    
                            <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <!-- Menu Will be Dynamic -->
                                    <?php  ?>
                                    <?php foreach($cat as $category_name): ?>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title"><?php echo $category_name->category_name; ?> Collection</li>
                                        <?php  foreach($subcat as $subcats): ?>
                                        <?php if($category_name->category_id == $subcats->category_id) :?>
                                            <li><a href="<?php echo site_url('Categories/GetProductBySubCategory/'.$subcats->sub_cat_id.'/'.$subcats->sub_cat_name); ?>"><?php echo $subcats->sub_cat_name; ?></a></li>
                                            <?php endif;?>
                                        <?php endforeach; ?>    
                                      
                                    </ul>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                        
                            <li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
                            
                        </ul>
                       
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area" id="">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        
                    </form>
                    <table id="SearchDataTable" style="width:400px;background: #ebebeb;">
                        <!-- <tr id="SearchDataTable"></tr> -->
                    </table>
                </div>
                <!-- Favourite Area -->
                <?php if($this->session->userdata('current_user_id')): ?>
                <div class="favourite-area">
                    <a href="<?php echo site_url('Profile/Favourites/'.$this->session->userdata('current_user_id')); ?>"><img src="<?php echo base_url() ?>assets/client/img/core-img/heart.svg" alt=""></a>
                </div>
                <?php  endif;?>
                <!-- User Login Info -->
                <?php //echo site_url('login/loginview'); ?>
                
                <div class="user-login-info">
                    <a href="javascript:UserLogin();"><img src="<?php echo base_url() ?>assets/client/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <?php if($this->session->userdata('current_user_id')): ?>
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="<?php echo base_url() ?>assets/client/img/core-img/bag.svg" alt=""> <span id="itemCounter">3</span></a>
                </div>
                <?php  endif;?>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Right Side Cart Area ##### -->
  <div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="<?php echo base_url() ?>assets/client/img/core-img/bag.svg" alt=""> <span id="itemCounter"></span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list" id="cartTable">
            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                    <div class="cart-item-desc">
                      <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cart Summary -->
        <div id="subTotal">
            <div class="cart-amount-summary">
            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$274.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> <span>$232.00</span></li>
            </ul>
            <div class="checkout-btn mt-100">
             
            </div>
        </div>
        </div>
        <div class="row" id="Checkout">
            <div class="col-md-3">
            <button onclick="location.href='<?php echo site_url('checkout')?>'" class="btn btn-success" id="cartCheckoutBtn">Check Out</button>
            </div>
        </div>
        <div class="col-md-3">
            <a href="javascript:;" onclick="resetCart()" class="btn btn-danger">Reset Cart</a>
        </div>
        
        
       
    </div>
</div>