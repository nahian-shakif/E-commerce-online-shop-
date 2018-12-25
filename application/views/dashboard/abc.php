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
                     <?php echo form_open_multipart('orders/insertabc', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                     <p>Enter Category Name</p>
                     <input type="text" name="ccategory_name" minlength="1" maxlength="20" size="20" placeholder="Enter category Here (Ex:- Mens's Women's etc)" oninput="myFunction()" class="form-control input-lg" id="categoryInput" required>
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