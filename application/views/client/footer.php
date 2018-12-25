<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
 <div class="container">
	 <div class="row">
		 <!-- Single Widget Area -->
		 <div class="col-12 col-md-6">
			 <div class="single_widget_area d-flex mb-30">
				 <!-- Logo -->
				 <div class="footer-logo mr-50">
					 <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
				 </div>
				 <!-- Footer Menu -->
				 <div class="footer_menu">
					 <ul>
						 <li><a href="shop.html">Shop</a></li>
						 <li><a href="#">Contact</a></li>
					 </ul>
				 </div>
			 </div>
		 </div>
		 <!-- Single Widget Area -->
		 <div class="col-12 col-md-6">
			 <div class="single_widget_area mb-30">
				 <ul class="footer_widget_menu">
					 <li><a href="#">Order Status</a></li>
					 <li><a href="#">Payment Options</a></li>
					 <li><a href="#">Shipping and Delivery</a></li>
					 <li><a href="#">Guides</a></li>
					 <li><a href="#">Privacy Policy</a></li>
					 <li><a href="#">Terms of Use</a></li>
				 </ul>
			 </div>
		 </div>
	 </div>

	 <div class="row align-items-end">
		 <!-- Single Widget Area -->
		 <div class="col-12 col-md-6">
			 <div class="single_widget_area">
				 <div class="footer_social_area">
					 <a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					 <a href="https://www.instagram.com/?hl=en" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					 <a href="https://twitter.com/" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					 <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					 <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				 </div>
			 </div>
		 </div>
	 </div>

<div class="row mt-5">
		 <div class="col-md-12 text-center">
			 <p>
				 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			 </p>
		 </div>
	 </div>

 </div>
</footer>
<!-- ##### Footer Area End ##### -->
<!-- Modal Starts-->
<!-- Modal HTML -->
<div id="ResetModal" class="modal fade">
<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Reset Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			
			<?php echo form_open('Forget_password/do_forget', array('class' => 'forget-form')); ?>
			
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="emailsent"></div>
					<div class="form-group">
						<input type="hidden" name="role" value="user">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Get Reset Link</button>
					</div>
				<?php echo form_close();?>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- Modal Starts-->
<!-- Modal HTML -->
<div id="UserLoginModal" class="modal fade">
<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			
			<?php echo form_open('Login/userlogin', array('class' => 'login-form')); ?>
			
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="PasswordNotMatched"></div>
					<div class="form-group">
						<input type="hidden" name="role" value="user">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					
					<p class="hint-text"><a href="javascript:ResetPassword();">Forgot Password?</a></p>
				<?php echo form_close();?>
			</div>
			<div class="modal-footer">Don't have an account? <a href="#" onclick="UserRegistration();">Create one</a></div>
		</div>
	</div>
</div>    


<div id="UserRegistrationModal" class="modal fade">
	<div class="modal-dialog modal-login" style="width: 30%;">
		<div class="modal-content">
			<div class="modal-header">			
				<h4 class="modal-title">Registration</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('Registration/UserRegistration', array('class' => 'userRegistrationForm'));?>
					
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email" required="required">		
					</div>
					<div class="UserExist"></div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>   
					    
					<div class="form-group">
						<input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required="required">	
					</div>      
					<div class="PasswordNotMatched"></div>  
					<div id="RegistrationSuccessfull"></div>  
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Singup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>    
<!-- Modal Ends-->
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="<?php echo base_url() ?>assets/client/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url() ?>assets/client/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url() ?>assets/client/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo base_url() ?>assets/client/js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="<?php echo base_url() ?>assets/client/js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="<?php echo base_url() ?>assets/client/js/active.js"></script>

 <!-- Google Maps -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="<?php echo base_url() ?>assets/client/js/map-active.js"></script>

<script>
	function ResetPassword(){

		$('#UserLoginModal').modal('hide');
		$('#ResetModal').modal('show');
		

		$('form.forget-form').on('submit', function(form){
   	
       form.preventDefault();
	   var url = "<?php echo base_url();?>";

   
       var URL = url+'Forget_password/do_forget';
   
       $.post(URL , $('form.forget-form').serialize(), function(data){

           if(data == '1'){

              $('.emailsent').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>A confirmation link has  been sent to your email</div>');
           }
		   if(data =='0'){

			   $('.emailsent').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>This email is not exists</div>');
		   }
		   
       console.log(data);
       
       });
   
   });

  
   

			
}

	function UserLogin(){
		//alert();
		var url = "<?php echo base_url();?>";

		  $.ajax({
			type: 'ajax',
			method: 'get',
			url: url+"login/CheckIfUserIsLoggedIn",
			async: false,
			//dataType: 'json',
			success: function(data) {
				
				if(data == '0'){

					$('#UserLoginModal').modal('show');
				}
				if(data == '1'){

					//var UserID = <?php //echo $this->session->userdata('current_user_id'); ?>;
					window.location.href = url+"Profile/ViewAccount/";
				}
				
				
			
			},
			error: function(error) {
				console.log(error);
			}
        });
	
	}
	function UserRegistration(){

		$('#UserLoginModal').modal('hide');
		$('#UserRegistrationModal').modal('show');
	
		
		$('form.userRegistrationForm').on('submit', function(form){
   	
       form.preventDefault();
	   var url = "<?php echo base_url();?>";

   
       var URL = url+'Registration/UserRegistration';
   
       $.post(URL , $('form.userRegistrationForm').serialize(), function(data){

           if(data == '1'){

              $('#RegistrationSuccessfull').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>Your account has been created successfully</div>');
           }
		   if(data =='2'){

			   $('.PasswordNotMatched').html('<p>Password Not Matched</p>');
		   }
		   if(data =='3'){

			    $('.UserExist').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>Please try an unique email</div>');
		   }
       
           
       
       console.log(data);
       
       
       
       
   		});
   
   
});


	}
	$('form.login-form').on('submit', function(form){
	
   	
       form.preventDefault();
	   var url = "<?php echo base_url();?>";

   
       var URL = url+'Login/userlogin';
   
       $.post(URL , $('form.login-form').serialize(), function(data){

           if(data == '1'){

              location.reload();
           }
		   else{

		$('.PasswordNotMatched').html('<p>Email or Password Not Matched</p>');

}
       
           
       
       console.log(data);
       
       
       
       
   });
   
   
});

	// AddToFvrtCheck
	$( document ).ready(function(){
    var url = "<?php echo base_url();?>";

    $('#ProductBox').on('mouseover', '.fvrt-class', function(){


        $.ajax({
          type: 'ajax',
          method: 'get',
          url: url+"Profile/CheckAddToFvrtLogin",
          async: false,
          dataType: 'json',
          success: function(data) {
			
				 if(data == '0'){

					 alert("You need to login first for add this product to favourite");

					$('#UserLoginModal').modal('show');
				}
				if(data == '1'){

				  //var UserID = <?php //echo $this->session->userdata('current_user_id'); ?>;
				    // window.location.href = url+"Profile/ViewAccount/";
				 }
				console.log(data);

          
            
        
          },
          error: function(error) {
            console.log(error);
          }
        });



	});
	$('#headerSearch').on('keyup', function(e){

		//if(e.keyCode == 32){
       
				var keyword = this.value;
		console.log(keyword)
		if(keyword == ''){
			$('#SearchDataTable').html('');
		}else{

			$.ajax({
				type: 'ajax',
				method: 'get',
				url: url+"Search/GetProducts",
				data: {
					keyword: keyword 
				},
				async: false,
				dataType: 'json',
				success: function(data) {

				console.log(data);
					//  if(data == '0'){

					// 	 $('#SearchDataTable').html("No product Found");
					//  }	else{
					// 	$('#SearchDataTable').html(data);
					//  }
					 $('#SearchDataTable').html(data);
					// // console.log('You Can not sale more products than its stock');
					// $('#SaleError-'+id+'').html("স্টকের অধিক পণ্য ইনভয়েসে যোগ করতে পারবেন না!");
					// setTimeout(function() {$('#SaleError-'+id+'').fadeOut('fast');}, 2000);
					// }
					// if(data == '0'){
					
					// $('input[class=bonus-'+id+']').val("বোনাস নেই");
					

					// }else{
					// $('input[class=bonus-'+id+']').val(data);
					// }
					
					
				
				},
				error: function(error) {
					console.log(error);
				}
        	});

		}
			
		

   		//}
	



	});

	$(document).ready(function(){
        $('form.aform').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Profile/AccountUpdate') ?>';
            
            $.post(URL ,$('form.aform').serialize(), function(data){
        
            $('.SuccessMessageAccount').html(data);
            
            setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
	
	

	   $('form.fvrt-form').on('submit', function(form){
   	
       form.preventDefault();
   
       var URL = url+'Profile/AddToFavourite';
   
       $.post(URL , $('form.fvrt-form').serialize(), function(data){

           if(data == '1'){

               alert('Added Successfully');
               window.location.reload();
           }
       
           
       
       console.log(data);
       
       
       
       
   })
});

$('form.rating-form').on('submit', function(form){
   	
       form.preventDefault();
   
       var URL = url+'Profile/ProductRating';
   
       $.post(URL , $('form.rating-form').serialize(), function(data){

           if(data == '1'){

               alert('Product Rated Successfully');
               window.location.reload();
           }
       
           
       
       console.log(data);
       
       
       
       
   })
});

$('form.reset-password-form').on('submit', function(form){
   	
       form.preventDefault();

	   var url = "<?php echo base_url();?>";

   
       var URL = url+'Forget_password/Reset';
   
       $.post(URL , $('form.reset-password-form').serialize(), function(data){

           if(data == '1'){

              $('.resetsuccess').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i>password updated successfully</div>');
			  window.location.href = url+"Home";
           }
		   if(data =='0'){

			   $('.PasswordNotMatched').html('<p>Password Not Matched</p>');
		   }
		   if(data =='0'){

				//$('.PasswordNotMatched').html('<p>Password Not Matched</p>');
				console.log(data);
			}
			console.log(data);
		   
       
       
       });
   
   });


});
</script>
<script>
	
</script>
<script>
	
	<?php
	@$cartDataSession = $this->session->userdata('cart');
	if($cartDataSession != '') {
	?>

	var cartArray = <?php echo $this->session->userdata('cart'); ?>;

	<?php
	} else {
	?>

	var cartArray = [];

	<?php
	}

	?>
	createCart();

	function addToCart(productID, productPrice, productName, productImgURL){

		var itemExists = false;
		
		if(cartArray.length > 0){

			for(var i = 0; i < cartArray.length; i++) {

				if(cartArray[i].id == productID) {

					itemExists = true;
					cartArray[i].qnty = cartArray[i].qnty + 1;
					break;

				}

			}

		}

		if(itemExists == false) {

			var singleProductArray = {};
			singleProductArray.id = productID;
			singleProductArray.price = productPrice;
			singleProductArray.name = productName;
			singleProductArray.qnty = 1;
			singleProductArray.image = productImgURL;
			cartArray.push(singleProductArray);

		}

		setCartToSession();
		createCart();
		//console.log(cartArray);
		//console.log(cartDataJSON);
	}
	function setCartToSession(cartDataJSON){

		var cartDataJSON = JSON.stringify(cartArray);

		var xhttp = new XMLHttpRequest();

		xhttp.open("POST", "<?php echo base_url(); ?>Cart/setDataToSession", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("cartData=" + cartDataJSON);

	}
	function createCart() {
		console.log(cartArray);

		var itemCounter = 0;
		var cartHTML ='';
		var subTotal ='';
		var CheckoutHTML ='';
						
		if(cartArray.length == 0) {

			cartHTML += '';
			subTotal = ''; 
			//CheckoutHTML ='';
							
					

		} else {
				
			var grandTotal = 0;

			for (var i = 0; i < cartArray.length; i++) {

				var price = Number(cartArray[i].qnty * cartArray[i].price).toFixed(2);

				// itemCounter += Number(cartArray[i].qnty);
				itemCounter += 1;
				grandTotal += Number(price);


				cartHTML +='<div class="single-cart-item"> <a href="#" class="product-image"> <img src="'+ cartArray[i].image +'" class="cart-thumb" alt=""> <div class="cart-item-desc"> <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span> <h6>' + cartArray[i].name + ', Price:- &#2547;' + price + ' </h6> <p class="color">Quantity:- <strong>' + cartArray[i].qnty + '</strong></p><p>Increase Quantity: <span onclick="increaseQnty(' + i + ')"><button type="button" class=""><i class="fa fa-plus-circle" aria-hidden="true"></i></button></span> </p><P>Decrease Quantity: <span onclick="decreaseQnty(' + i + ')"><button type="button" class=""><i class="fa fa-minus-circle" aria-hidden="true"></i></button></span> <p> </div></a></div>';
			   }
			   subTotal += '<div class="cart-amount-summary"><h2>Summary</h2><ul class="summary-table"><li><span>subtotal:</span><span>$'+Number(grandTotal).toFixed(2);+'</span></li><li><span>delivery:</span><span>Free</span></li><li><span>total:</span> <span>$'+Number(grandTotal).toFixed(2);+'</span></li></ul><div class="checkout-btn mt-100"><a href="checkout.html" id="cartCheckoutBtn" class="btn essence-btn">check out</a></div></div>';

			
			 
			
		}

		document.getElementById('itemCounter').innerHTML = itemCounter;
		document.getElementById('cartTable').innerHTML = cartHTML;
		document.getElementById('subTotal').innerHTML = subTotal;


		if(itemCounter == 0) {
			
			document.getElementById('cartCheckoutBtn').disabled = true;

		} else {
			
			document.getElementById('cartCheckoutBtn').disabled = false;
			
		}
	
	}
	function increaseQnty(cartIndex){

		cartArray[cartIndex].qnty = cartArray[cartIndex].qnty + 1;
		setCartToSession();
		createCart();

	}

	function decreaseQnty(cartIndex) {

		if(cartArray[cartIndex].qnty == 1) {

			cartArray.splice(cartIndex,1);

		} else {

			cartArray[cartIndex].qnty = cartArray[cartIndex].qnty - 1;

		}

		setCartToSession();
		createCart();

	}

	function resetCart() {

		cartArray = [];
		setCartToSession();
		createCart();

	}
</script>
</body>

</html>