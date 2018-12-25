 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: url(assets/client/img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Reset password</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

             

                <div class="col-12 col-md-12 col-lg-12 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Enter password</h5>
                                <?php echo form_open('Forget_password/Reset', array('class' => 'reset-password-form'));?>
                                 <input type="hidden" class="form-control" value="<?php if(isset($email)) echo $email; ?>" name="email">   
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" >
                                    </div>     
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="c_password" >
                                    </div>          
                                    <div class="PasswordNotMatched"></div>     
                                                     
                                    <div class="form-group">
                                    
                                    <input type="submit" value="Reset" class="btn btn-success">
                                    </div>

                                    <div class="resetsuccess"></div>
                                <?php echo form_close();?>
                        
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->