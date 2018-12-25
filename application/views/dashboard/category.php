<section class="forms">
    <div class="container-fluid">
          <header> 
            <h1 class="h3 display"><?php if(isset($home)) echo $home; ?> / <?php if(isset($breadcumbs)) echo $breadcumbs; ?></h1>
          </header>
          <div class="col-md-16 col-md-offset-3">
            </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h2 class="h5 display display"><?php echo $page_title; ?></h2>
                        </div>
                
                       <div class="card-block">
                       
                        <div class="form-group">
                        <?php echo form_open_multipart('insert_category/addtocat', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                            <p>Enter Category Name</p>
                            <input type="text" name="category_name" placeholder="Enter category Here (Ex:- Fruits, Vegetable, Meats etc)" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Enter Sub Category Name</p>
                            <input type="text" name="sub_category_name" placeholder="Enter Contact Sub Category Here (Ex:- Banana, Apple etc)" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Name</p>
                            <input type="text" name="product_name" placeholder="Enter a name" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Regular Price</p>
                            <input type="text" name="price" placeholder="Enter a price" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Sale Price</p>
                            <input type="text" name="sale" placeholder="Enter a salling price" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Weight</p>
                            <input type="weight" name="weight" placeholder="Enter weight" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Quantity</p>
                            <input type="quantity" name="quantity" placeholder="Enter a quantity" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Upload a Image</p>
                            <input type="file" name="file" id="files" />
                            <br>
                            <p>Title<input type="text" name="title" id="title" value="" /></p>

                            <!-- <textarea name="contact_details"></textarea>
                            <script>
                                CKEDITOR.replace( 'contact_details' );
                            </script> -->

                            <!-- <input name="submit" type="button" value="save" class="submit-button"> -->
                        </div>  
                        <div class="jsError"></div>
                        <input type="submit" value="save" name="save">
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
  
     
        <script>
        // $(document).ready(function(){
        //     var formData = new FormData( $("#formID")[0] );

        //     $('form.cat_form').on('submit', function(form){
        //         form.preventDefault();
        //         var URL = '<?php echo site_url('insert_category/addtocat') ?>';
        //         contentType: "multipart/form-data",
        //         $.post(URL , $('form.cat_form').serialize(), function(data){

        //             $('div.jsError').html(data);
        //         })
                
                
        //     });

        // });
        // $(function() {
        //         $('#upload_file').submit(function(e) {
        //             e.preventDefault();
        //             $.ajaxFileUpload({
        //                 url 			:'<?php echo site_url('insert_category/addtocat') ?>', 
        //                 secureuri		:false,
        //                 fileElementId	:'userfile',
        //                 dataType		: 'json',
                       
        //                 success	: function (data, status)
        //                 {
        //                     $('div.jsError').html(data);
        //                 }
        //             });
        //             return false;
        //         });
        //     });
        // </script>