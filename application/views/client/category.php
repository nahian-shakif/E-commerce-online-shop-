
	
	<section style="margin-top:200px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<div class="left-sidebar text-left">
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <h4 class="panel-heading ">CATEGORIES</h4>
							
							<div class="panel panel-default" id="list">
                            <?php foreach($sub_cat as $sub_cat_list) : ?>
								<div class="panel-heading" id="showdata">
                                    <?php $current_cat = $this->session->userdata('current_cat'); ?>
									<h4 class="panel-title"><a href="<?php echo site_url('categories/products/'.$sub_cat_list->sub_category_name.'/'.$current_cat) ?>" class="active subcat_name" id="sub"><?php echo $sub_cat_list->sub_category_name;  ?> </a></h4>
                                
								</div>
                             <?php endforeach; ?>       
							</div>
							
						</div><!--/category-productsr-->
					
					
					</div>
				</div>
				 
				<div class="col-sm-10 padding-right">
					<div class="container">
                        <div class="row">
                        <div id="item_row">
                        <?php if(isset($products)): ?>
						<?php foreach($products as $p) : ?>
						<div class="col-sm-2 row_1">
							<div class="product-image-wrapper">
								<div class="single-products">
                                    <div class="productinfo text-center">

									<a href="javascript:;" class="item" data="<?php echo $p->product_id;?>"><img src="<?php echo base_url().''.$p->image;?>" /></a>

                                        <h2>$<?php echo $p->price;?></h2>

										<p>In stock:&nbsp;<?php echo $p->quantity;?>&nbsp;pisces</p>

                                        <p class="text-lead"><?php echo $p->product_name;?></p>

										<?php echo "<a style='cursor:pointer;' onclick='addToCart(" . $p->product_id . ", " . $p->price . ", \"" . $p->product_name . "\") ' class='add-item btn btn-default add-to-cart my-cart-btn' >Add to Cart</a>";?>
										
                                    </div>
								</div>
							</div>	
						</div>
						<?php endforeach; ?>
                    <?php endif;?>
						</div>	
						
					</div><!--features_items-->
             
                               
                        </div>
                         <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                                    
                    </div>
				</div>
			</div>
		</div>
	</section>
    