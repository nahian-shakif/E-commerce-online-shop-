<section class="forms">
    <div class="container-fluid">
          
          <div class="col-md-16 col-md-offset-3">
            </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h2 class="h5 display display"><?php if(isset($page_title) )echo $page_title; ?></h2>
                        </div>
                
                       <div class="card-block">
                       
                       <div class="form-group">
                        <?php echo form_open_multipart('insert_category/addtocat', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                        <p>Select Product Category</p>
                            <div class="form-group">
                            <select name="cat_id" id="" class="form-control" required>
                              <option value="">Select category</option>
                              <?php foreach($CategoryList as $cat): ?>
                                <option value="<?php echo $cat->category_id ?>"><?php echo $cat->category_name ?></option>
                              <?php  endforeach;?>
                            </select>
                          </div>
                          <br>
                          <p>Select Product Sub Category</p>
                          <div class="form-group">
                            <select name="sub_cat_id" id="" class="form-control" required>
                              <option value="">Select Sub-category</option>
                              <?php foreach($SubCategoryList as $scat): ?>
                                <option value="<?php echo $scat->sub_cat_id ?>"><?php echo $scat->sub_cat_name ?></option>
                              <?php  endforeach;?>
                            </select>
                          </div>
                            <br>
                            <p>Name</p>
                            <input type="text" name="product_name" placeholder="Enter a name" class="form-control input-lg" id="inputlg" required>
                            <br>
                            <p>Description</p>
                            <textarea name="desciption" id="" cols="40" rows="10" class="form-control" required></textarea>
                            <br>
                            <p>Regular Price</p>
                            <input type="number" min="0" name="price" placeholder="Enter a price" class="form-control input-lg" id="inputlg" required>
                            <br>
                            <p>Sale Price</p>
                            <input type="number" min="0" name="sale" placeholder="Enter a salling price" class="form-control input-lg" id="inputlg" >
                            <br>
                            <p>measurement</p>
                            <input type="text" name="measurement" placeholder="Enter weight" class="form-control input-lg" id="inputlg" required>
                            <br>
                            <p>Quantity</p>
                            <input type="number" min="0" name="quantity" placeholder="Enter a quantity" class="form-control input-lg" id="inputlg" required>
                            <br>
                            <p>Upload a Image</p>
                            <input type="file" name="file" id="files" required/>
                            <br>
                            <p>Title<input type="text" name="title" id="title" value="" /></p>

                            
                        </div>  
                        <div class="jsError"></div>
                        <input type="submit" class="btn btn-success" value="save" name="save">
                        <div class="col-md-6 col-md-offset-3">
                            <?php echo $this->session->flashdata('posted'); ?>
                      </div>
                       
                        </div>  
                        <!-- <input type="submit" value="save"> -->
                        </div>
                        <?php echo form_close(); ?>
                
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
  
