 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: url(assets/client/img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2>Payment Instruction</h2>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">01. Go to your bKash Mobile Menu by dialing *247#</div>
                    <div class="panel-body">02. Choose “Payment”</div>
                    <div class="panel-body">03. Enter the Merchant bKash Account Number 01711111111</div>
                    <div class="panel-body">45. Enter amount <?php if(isset($grand_total)) echo $grand_total ?></div>
                    <div class="panel-body">05. Enter a reference <?php if(isset($ReferrenceNo)) echo '#'.$ReferrenceNo ?></div>
                    <div class="panel-body">06. Enter the Counter Number 1 </div>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <h2>Now Enter Transection ID</h2><br>
                <div class="col-md-12">
                    <?php echo form_open('Billing/Payment_success');?>
                        <div class="form-group">
                                <input type="text" name="transaction_id">
                                <input type="hidden" name="user_id" value="<?php echo $UserID; ?>">
                                <input type="hidden" name="referrence_id" value="<?php echo $ReferrenceNo; ?>">
                                <input type="hidden" name="grand_total" value="<?php if(isset($grand_total)) echo $grand_total ?>">
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" value="confirm payment" class="btn btn-success">
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div> 
    </div>  