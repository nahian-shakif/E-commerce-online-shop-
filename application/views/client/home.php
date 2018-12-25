  
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(assets/client/img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h2>New Collections Are Available !!!</h2>
                        <!-- //<a href="#" class="btn essence-btn">view collection</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(assets/client/img/bg-img/bg-3.png);">
                        <div class="catagory-content">
                            <h2>Fast</h2>
                            <p>Easy add to cart system</p>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(assets/client/img/bg-img/bg-3.png);">
                        <div class="catagory-content">
                            <h2>Easy</h2>
                            <p>Easy Payment methods</p>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(assets/client/img/bg-img/bg-3.png);">
                        <div class="catagory-content">
                         <h2>Reliable</h2>
                         <p>All time email notification system</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->


    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                    <?php foreach($PopularProductListData as $p):?>   
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?php echo site_url($p->image);?>" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?php echo site_url($p->image);?>" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                                <!-- <a href="#" class="favme fa fa-heart"></a> -->
                                                <?php $UserLoggedIIn = $this->session->userdata('current_user_id');?>
                                                <?php if(isset($UserLoggedIIn)) : ?>
                                                    <?php echo form_open('Profile/AddToFavourite', array('class' => 'fvrt-form'));?>
                                                        <input type="hidden" name="product_id" value="<?php echo $p->product_id; ?>">
                                                        <input type="hidden" name="client_id" value="<?php echo $this->session->userdata('current_user_id') ?>">
                                                        <a type="submit" value="" class="favme fa fa-heart"></a>
                                                    <?php echo form_close();?>
                                                    <?php //echo "<a style='cursor:pointer;' onclick='addToFvrt(" . $spd->product_id . ", " . $spd->product_id  . ") ' class='favme fa fa-heart' ></a>";?>
                                                <?php else :?>
                                                    <a href="" class="favme fa fa-heart fvrt-class"></a>
                                                <?php endif;?> 
                                            </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                            <span>topshop</span>
                                            <a href="<?php echo site_url('Categories/SingleProductDetails/'.$p->product_id.'/'.$p->product_name);  ?>">
                                                <h6><?php echo $p->product_name; ?></h6>
                                            </a>
                                            <p class="product-price"><span class="old-price">$<?php echo $p->price ?></span>$<?php echo $p->sale ?></p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                   

                                                    <?php echo "<a style='cursor:pointer;' onclick='addToCart(" . $p->product_id . ", " . $p->price . ", \"" . $p->product_name . "\", \"" . site_url($p->image) . "\") ' class='add-item btn  add-to-cart my-cart-btn btn essence-btn' >Add to Cart</a>";?>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->