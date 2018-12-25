<div class="container">
	<h3>Product List</h3>
	<div class="alert alert-success" style="display: none;">
		
    </div>

   <div id="showcat">
  
   <div class="form-group">
        <label for="sel1">Select Category:</label>
        <select class="form-control" id="cat">
            <option value= "select category" disabled>------ Select Category ------</option>
            <?php foreach($cat as $c): ?>
              <option value="<?php echo $c->category_id; ?>"><?php echo $c->category_name; ?></option>
            <?php endforeach; ?>
            
        </select>
    </div>
    <div class="form-group">
        <label for="sel1">Select Category:</label>
        <select class="form-control" id="sub_cat" disabled="">	
            
        </select>
    </div>
	<button id="get_products" class="btn btn-success">GET PRODUCTS</button>
   


   </div>


	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
	<div class="col-md-6 col-md-offset-3">
           <?php echo $this->session->flashdata('ProductUpdated'); ?>
     </div>
		<thead>
			<tr>
				<td>Product</td>
				<td>Product Name</td>
				<td>Price</td>
				<td>Saling price</td>
				<td>measurement</td>
				<td>Quantity</td>
				<td>Image</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
    <div class="modal-body">
	  <?php echo form_open('dashboard/updateproduct', array('class'=>'form-horizontal product_update_form', 'id'=>'product-edit-form')); ?>
        		<input type="hidden" name="product_id">
				<div class="jsError"></div>
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Product Name</label>
        			<div class="col-md-8">
        				<input type="text" name="product_name" class="form-control">
        			</div>
        		</div>

				<div class="form-group">
        			<label for="name" class="label-control col-md-4">Price</label>
        			<div class="col-md-8">
        				<input type="text" name="price" class="form-control">
        			</div>
        		</div>
				
				<div class="form-group">
        			<label for="name" class="label-control col-md-4">Saling Price</label>
        			<div class="col-md-8">
        				<input type="text" name="sale" class="form-control">
        			</div>
				</div>
			
				<div class="form-group">
        			<label for="name" class="label-control col-md-4">measurement</label>
        			<div class="col-md-8">
        				<input type="text" name="measurement" class="form-control">
        			</div>
        		</div>

				<div class="form-group">
        			<label for="name" class="label-control col-md-4">Quantity</label>
        			<div class="col-md-8">
        				<input type="text" name="quantity" class="form-control">
        			</div>
				</div>
				<div class="updatesuccess"></div>


        		
       
      </div>
      <div class="modal-footer">
	  
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	
        <button type="submit" id="submitupdate" value="submit" name="submit" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
	  <?php echo form_close(); ?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$(function(){
		
		//edit
		$('#showdata').on('click', '.item-edit', function(){
			var product_id = $(this).attr('data');
			base_url = '<?php echo base_url();?>';
			console.log(product_id);
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Product');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>dashboard/singleproductdetails',
				data: {product_id: product_id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=product_name]').val(data.product_name);
					$('input[name=price]').val(data.price);
					$('input[name=measurement]').val(data.measurement);
					$('input[name=quantity]').val(data.quantity);
					$('input[name=sale]').val(data.sale);
				    $('input[name=product_id]').val(data.product_id);
				    // $('input[name=image]').val(data.image);
					// $('#imagediv').html('<img src="'+base_url+data.image+'" class="img-responsive">');
					console.log(base_url+data.image);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});

			$('form#product-edit-form').on('submit', function(form){
				
				form.preventDefault();
			
				var URL = '<?php echo base_url();?>Dashboard/updateproduct';
			
				$.post(URL , $('form#product-edit-form').serialize(), function(data){
				
					//alert('This Proposal Is Referred to Another Teacher');
					//console.log("HEllo");
					//window.location.reload();
				
				console.log(data);
				if(data == '1'){
					//console.log("It's working");
					$('.updatesuccess').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>Product Updated Successfully</div>');
					//setTimeout(function () { window.location.reload(); }, 2000);
				}
				if(data == '2'){
					console.log("It's not working");
				}
				
				
				
			})
		});
		});

		 
		$('#showdata').on('click', '.item-delete', function(){
			var product_id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>dashboard/deleteproduct',
					data:{product_id:product_id},
					dataType: 'text',
					success: function(response){
						
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Product Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
					
							
					
						
						
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});



		
        
	});
</script>
<script>

$(document).ready(function(){

            $("#cat").on('change', function (){

				var URL = '<?php echo base_url();?>dashboard/subcatname';

                var category_id = $(this).val();
               // alert(cat_name);
                if(category_id == ''){
                    $('#sub_cat').prop('disabled', true);
                }
                else
				{

                    $('#sub_cat').prop('disabled', false);

                    $.ajax({

                        url: URL,
                        type:'POST',
                        data: {category_id: category_id },
						dataType: 'text',
                        success: function(data){

                          $('#sub_cat').html(data);
						   //console.log(data);
                        },
                        error: function(){
                           
                           
                            alert("Not okay");
                        }

                    });
                }

            });
			

			

        });
</script>
<script>
	$(document).ready(function(){
		$("#get_products").on('click', function(){

					var sub_cat_id = $('#sub_cat').val();
					//alert(sub_cat_id);
					var URL = '<?php echo base_url() ?>dashboard/showallproduct';

					$.ajax({
					url: URL ,
					type: 'POST',
					data: {sub_cat_id:sub_cat_id},
					dataType: 'json',
					success: function(data){
						
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html +='<tr>'+
										'<td>'+data[i].product_id+'</td>'+
										'<td>'+data[i].product_name+'</td>'+
										'<td>'+data[i].price+'</td>'+
										'<td>'+data[i].sale+'</td>'+
										'<td>'+data[i].measurement+'</td>'+
										'<td>'+data[i].quantity+'</td>'+
										'<td>'+'<img scr="<?php echo base_url()?>'+data[i].image+'"></td>'+
										
										'<td>'+
											'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].product_id+'">Edit</a>'+
											'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].product_id+'">Delete</a>'+
										'</td>'+
									'</tr>';
							html +='<div class="updatesuccess"></div>';		
						}
						$('#showdata').html(html);
						console.log(data);
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				});
					

				});
				// $('form.#myForm').on('click', '#submitupdate', function(form){
				//     form.preventDefault();
				//     var URL = '<?php //echo site_url('dashboard/updateproduct') ?>';
				//     $.post(URL , $('form#myForm').serialize(), function(data){

				// 	   $('div.jsError').html(data).fadeIn().delay(4000).fadeOut('slow');

				//     })
					
					
				// });		
		
	});
</script>