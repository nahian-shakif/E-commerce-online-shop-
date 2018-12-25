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
                     <?php echo form_open_multipart('insert_category/InsertCategoryName', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                     <p>Enter Category Name</p>
                     <input type="text" name="category_name" minlength="1" maxlength="20" size="20" placeholder="Enter category Here (Ex:- Mens's Women's etc)" oninput="myFunction()" class="form-control input-lg" id="categoryInput" required>
                     <br>
                  </div>
                  <div class="jsError"></div>
                  <input type="submit" class="btn btn-success" value="save" name="save">
                  <div class="col-md-6 col-md-offset-3">
                     <?php echo $this->session->flashdata('posted'); ?>
                  </div>
               </div>
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
                <th>Category Name</th>
                <th>Action</th>
                <th>Visibility </th>
              </tr>
            </thead>
            <tbody>
              <?php $counter =1?>
            <?php foreach($current_categories as $category):?>
              <tr>
                <td><?php echo $counter++;?></td>
                <td><?php echo $category->category_name;?></td>
               <th><a href="javascript:;" onclick="category_name_change(<?php echo $category->category_id?>);" class="btn btn-success">Change category name</a></th>
                
    
                  <div id="cat_input"></div>
                <?php if($category->cat_status == 1) :?>
                <th>Current Status: Published / <a href="<?php echo site_url('Dashboard/CategoryVisibility/0/'.$category->category_id)?>" class="btn btn-danger" >Un-publish This Category</a></th>
                <?php else:?>
                <th>Current Status: Unpublished / <a href="<?php echo site_url('Dashboard/CategoryVisibility/1/'.$category->category_id)?>" class="btn btn-success">Publish This Category</a> </th>
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
<div id="CaTNameEditModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Change Name</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('Dashboard/ChangeCatergoryName');?>
          <div class="form-group">
            <input type="text" class="input-group" name="category_name">
            <input type="hidden" name="category_id">

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
  function category_name_change(category_id){
   
     
			//$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
      	$('#CaTNameEditModal').modal('show');
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>dashboard/getCatName',
					data:{category_id:category_id},
					dataType: 'json',
         // async:false,
					success: function(response){
						
						for(var i=0 ;i<response.length; i++){
              console.log(response[i].category_name);
              $('input[name=category_name]').val(response[i].category_name);
              $('input[name=category_id]').val(response[i].category_id);
            }
              
              
						//$('.alert-success').html('Product Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
           
					
							
					
						
						
					},
					error: function(){
						alert('Error deleting');
					}
				});
			
		

  }
</script>