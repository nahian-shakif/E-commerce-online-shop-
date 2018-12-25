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
                       <?php echo form_open('insert_category/InsertSubCategory', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                       <div class="form-group">
                        <select name="cat_id" id="" class="form-control">
                          <option value="">Select category</option>
                          <?php foreach($CategoryList as $cat): ?>
                            <option value="<?php echo $cat->category_id ?>"><?php echo $cat->category_name ?></option>
                          <?php  endforeach;?>
                        </select>
                       </div>
                        <div class="form-group">
                        
                            <p>Enter Category Name</p>
                            <input type="text" name="sub_category_name" placeholder="Enter sub-category Here (Ex:- Pant, Shirt, Dress )" class="form-control input-lg" id="SubcategoryInput" required>
                            <br>
                            
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
                  <div class="col-md-12 card">
                <h2>List of all categories</h2> 
                  <p style="color:red"><?php echo $this->session->flashdata('visibility'); ?></p>            
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Serial</th>
                        <th>Sub Category Name</th>
                        <th>Category Name</th>
                        <th>Action</th>
                        <th>Visibility </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $counter =1?>
                      
                     <?php foreach($SubCategoryList as $subcategory):?>
                      <tr>
                        <td><?php echo $counter++;?></td>
                        <td><?php echo $subcategory->sub_cat_name;?></td>
                        <?php foreach($CategoryList as $cat): ?>
                        <?php if($cat->category_id == $subcategory->category_id):?>
                        <td><?php echo $cat->category_name;?></td>
                        <?php endif;?>
                        <?php endforeach;?>
                      <th><a href="javascript:;" onclick="subcategory_name_change(<?php echo $subcategory->sub_cat_id?>);" class="btn btn-success">Change Sub-category name</a></th>
                        
            
                          <div id="cat_input"></div>
                        <?php if($subcategory->subcat_status == 1) :?>
                        <th>Current Status: Published /<a href="<?php echo site_url('Dashboard/SubCategoryVisibility/0/'.$subcategory->sub_cat_id)?>" class="btn btn-danger" >Un-publish This Sub-category</a></th>
                        <?php else:?>
                        <th>>Current Status: Unpublished /<a href="<?php echo site_url('Dashboard/SubCategoryVisibility/1/'.$subcategory->sub_cat_id)?>" class="btn btn-success">Publish This Sub-category</a> </th>
                        <?php endif;?>
                        
                        
                      </tr>
                  
                  <?php endforeach;?>
            </tbody>
          </table>
         </div>
      </div>
   </div>
   </div>
   </div>
   </div>
</section>
<div id="SubCaTNameEditModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Change Sub category Name</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('Dashboard/ChangeSubCatergoryName');?>
          <div class="form-group">
            <input type="text" class="input-group" maxlength="20" minlength="1" size="20" name="sub_cat_name" id="">
            <input type="hidden" name="sub_cat_id">

          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit"  class="btn btn-success" value="Change">
        <?php echo form_close();?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>


   function subcategory_name_change(sub_cat_id){
   
     
   //$('#deleteModal').modal('show');
   //prevent previous handler - unbind()
     $('#SubCaTNameEditModal').modal('show');
     $.ajax({
       type: 'POST',
       url: '<?php echo base_url() ?>dashboard/getSubCatName',
       data:{sub_cat_id:sub_cat_id},
       dataType: 'json',
      // async:false,
       success: function(response){
         
         for(var i=0 ;i<response.length; i++){
           console.log(response[i].sub_cat_name);
           $('input[name=sub_cat_name]').val(response[i].sub_cat_name);
           $('input[name=sub_cat_id]').val(response[i].sub_cat_id);
         }
           
           
         //$('.alert-success').html('Product Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
        
       
           
       
         
         
       },
       error: function(){
         alert('Error deleting');
       }
     });
   
 

}
// $("input#SubcategoryInput").on({
//       keydown: function(e) {
//         if (e.which === 32)
//           return false;
//       },
//       change: function() {
//         this.value = this.value.replace(/\s/g,"");
//       }
//     });
</script>