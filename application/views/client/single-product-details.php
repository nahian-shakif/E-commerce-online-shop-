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
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center" id="ProductBox">

        <!-- Single Product Thumb -->
        <?php foreach($SingleProductData as $spd): ?>
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="<?php echo site_url($spd->image);?>" alt="">
                <img src="<?php echo site_url($spd->image);?>" alt="">
                <img src="<?php echo site_url($spd->image);?>" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        
        <div class="single_product_desc clearfix">
            <!-- <span>mango</span> -->
            <a href="cart.html">
                <h2><?php  echo $spd->product_name; ?></h2>
            </a>
            <p class="product-price">
                                            <?php if($spd->sale == '' || $spd->sale == 0):?>

                                                &#2547;<?php echo $spd->price ?>
                                                
                                            <?php else:?>

                                            <span class="old-price">$<?php echo $spd->price ?></span>
                                            &#2547;<?php echo $spd->sale ?>                 

                                            <?php endif;?>
            
            <p class="product-desc"><?php  echo $spd->product_description; ?></p>

        
              
                <div class="cart-fav-box d-flex align-items-center">
                   
                    <!-- <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button> -->
                    <?php if($spd->sale != ''){

                    $currentPrice = $spd->sale;
                    }else{

                    $currentPrice = $spd->price;

                    } ?>
                     <?php if($spd->quantity <= 0):?>

                     <p ><strong>Out Of Stock Now</strong></p>

                     <?php else:?>
                    <?php echo "<a style='cursor:pointer;' onclick='addToCart(" . $spd->product_id . ", " . $currentPrice . ", \"" . $spd->product_name . "\", \"" . site_url($spd->image) . "\") ' class='add-item btn  add-to-cart my-cart-btn btn essence-btn' >Add to Cart</a>";?>

                    <?php  endif; ?>
                   
                    <div class="product-favourite ml-4">
                        <!-- <a href="#" class="favme fa fa-heart"></a> -->
                        <?php if($IfAddedToFvrt): ?>
                                <p style="color:green">This Prodcut is already added to your favourite list, Check Your Favourite List</p>
                        <?php else:?>
                        <?php $UserLoggedIIn = $this->session->userdata('current_user_id');?>
                        <?php if(isset($UserLoggedIIn)) : ?>
                            <?php echo form_open('Profile/AddToFavourite', array('class' => 'fvrt-form'));?>
                                <input type="hidden" name="product_id" value="<?php echo $spd->product_id; ?>">
                                <input type="hidden" name="client_id" value="<?php echo $this->session->userdata('current_user_id') ?>">
                                <button type="submit" value="" class="favme fa fa-heart"></button>
                            <?php echo form_close();?>
                            <?php //echo "<a style='cursor:pointer;' onclick='addToFvrt(" . $spd->product_id . ", " . $spd->product_id  . ") ' class='favme fa fa-heart' ></a>";?>
                        <?php else :?>
                            <a href="" class="favme fa fa-heart fvrt-class"></a>
                        <?php endif;?>    
                        <?php endif;?>    
                    </div>
                </div>
                <div class="cart-fav-box d-flex align-items-center">
                   
                    <div class="row">
                        <div class="col-sm-12">
                        <p>Rate This Product</p>
                        <?php echo form_open('Profile/ProductRating', array('class' => 'rating-form'));?>
                        <div id="wrapper">
                            <input type="radio" id="star1" name="rating" value="1"/>
                            <label for="star1"></label>
                            <input type="radio" id="star2" name="rating" value="2"/>
                            <label for="star2"></label>
                            <input type="radio" id="star3" name="rating" value="3"/>
                            <label for="star3"></label>
                            <input type="radio" id="star4" name="rating" value="4"/>
                            <label for="star4"></label>
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label for="star5"></label>
                           
                            </div>
                            
                            <br>
                            <input type="hidden" name="product_id" value="<?php echo $spd->product_id ?>">
                            <input type="hidden"  name="client_id" value="<?php echo $this->session->userdata('current_user_id') ?>">
                            <button type="submit" class="btn btn-success">Rate This</button>
                            <?php echo form_close(); ?>
                            <div class="rating-block">
                                <h4>Average user rating</h4>
                                <?php  foreach($rating as $r):?>
                                <h2 class="bold padding-bottom-7"><?php  echo  round($r->AverageRating, 2);?> <small>/ 5</small></h2>
                                <?php endforeach; ?>
                                
                            </div>
                           
                        </div>			
		            </div>		
                  
                </div>
            </form>
        </div>
        <?php endforeach;?>
    </section>
    <!-- ##### Single Product Details Area End ##### -->