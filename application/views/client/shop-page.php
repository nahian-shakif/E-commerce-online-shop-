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
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                       
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

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
                                            <!-- Favourite -->
                                            
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span></span>
                                            <a href="<?php echo site_url('Categories/SingleProductDetails/'.$p->product_id.'/'.$p->product_name);  ?>">
                                                <h6><?php echo $p->product_name; ?></h6>
                                            </a>
                                            <p class="product-price">
                                            <?php if($p->sale == '' || $p->sale <= 0):?>

                                                &#2547;<?php echo $p->price ?>
                                                
                                            <?php else:?>

                                            <span class="old-price">&#2547;<?php echo $p->price ?></span>
                                            &#2547;<?php echo $p->sale ?>                 

                                            <?php endif;?>
                                               
                                            </p>
                                            <?php $currentPrice = 0;?>
                                            <?php if($p->sale != ''){

                                                 $currentPrice = $p->sale;

                                            }else{

                                                $currentPrice = $p->price;


                                            }
                                                
                                                ?>
                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <?php if($p->quantity <= 0):?>
                                                <div class="add-to-cart-btn">
                                                   

                                                  <p>Out Of Stock Now</p>
                                               </div>
                                                 <?php else:?>
                                                 <div class="add-to-cart-btn">
                                                   

                                                   <?php echo "<a style='cursor:pointer;' onclick='addToCart(" . $p->product_id . ", " . $currentPrice . ", \"" . $p->product_name . "\", \"" . site_url($p->image) . "\") ' class='add-item btn  add-to-cart my-cart-btn btn essence-btn' >Add to Cart</a>";?>
                                               </div>
                                                 <?php endif;?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <!-- <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
  