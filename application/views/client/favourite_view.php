 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><?php if(isset($BreadCumbs)) echo $BreadCumbs; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                       
                        <div class="row">

                            <!-- Single Product -->
                            <?php foreach($ProductListData as $p):?>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="<?php echo site_url($p->image);?>" alt="">
                                            <!-- Hover Thumb -->
                                            <img class="hover-img" src="<?php echo site_url($p->image);?>" alt="">

                                            <!-- Product Badge -->
                                            <!-- <div class="product-badge offer-badge">
                                                <span>-30%</span>
                                            </div> -->
                                           
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
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
 