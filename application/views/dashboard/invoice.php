
<div class="container-fluid">
<div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h1 class="text-center"><strong>ORDER SUMMERY</strong></h1>
                                                        <?php if($this->session->flashdata('success')){echo $this->session->flashdata('success');} ?>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                <?php $fullname; $address; $phone; $email; $transaction_id; $order_date; $order_time; $status; $order_master_id;  ?>
                                                                
                                                                <?php foreach($OrderResOBJ as $ref => $orderList) :?>
                                                               
                                                                    <?php foreach($orderList as $od) :?>
                                                                        <?php  $fullname = $ref; $address = $od->address; $phone = $od->phone; $email = $od->email; $order_date = date("d F, Y ", strtotime($od->order_date_time)); $order_time = date("h:i A", strtotime($od->order_date_time)); $status= $od->status; $order_master_id =$od->order_master_id; $transaction_id = $od->transaction_id; ?>
                                                                    <?php endforeach;?> 
                                                                        <h2>Customer Details</h2>
                                                                        <p>Name: <?php echo $fullname;?> </p>
                                                                        <p>Address:  <?php echo $address;?></p>
                                                                        <p>Phone:  <?php echo $phone;?> </p>
                                                                        <p>Email: <?php echo $email;?></p>
                                                                     
                                                               

                                                                </div>
                                                                <div class="col-md-4">
                                                                <?php  $set_order_status;?>
                                                                    <?php 

                                                                        if($status == '3'){
                                                                            $set_order_status = "Confirmed";
                                                                        }
                                                                        if($status == '4'){
                                                                            $set_order_status = "Shipped";
                                                                        }
                                                                    ?>
                                                                        <h2>Order Details</h2>
                                                                        <p>Reference No. <?php echo $transaction_id ;?> </p>
                                                                        <p>Order Date:  <?php echo $order_date ?> </p>
                                                                        <p>Order Time:  <?php echo $order_time ?> </p>
                                                                        <p>Order Status:   <?php  echo $set_order_status ;?></p>
                                                                        <?php  if($status != '4') :?>
                                                                        <p><a href="<?php echo site_url('Orders/ShippedOrder/'.$od->order_master_id.'/'.urlencode($email).'/'.$transaction_id); ?>" class="btn btn-success">Shipped This Order</a></p>
                                                                        <?php endif; ?>
                                                                       
                                                          
                                                                   
                                                                    
                                                            </div>
                                                            
                                                            </div>
                                                        
                                                        </div>   
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <td><strong>Item Name</strong></td>
                                                                        <td class="text-center"><strong>Item Price</strong></td>
                                                                        <td class="text-center"><strong>Item Quantity</strong></td>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach($orderList as $od) :
                                                                    //$grand_total = $this->session->set_userdata('grand_total',$od->grand_total);
                                                                     $grand_total =  $od->grand_total;
                                                                     
                                                                    
                                                                    ?>
                                                                    <?php //echo array_sum($Total);?>
                                                                
                                                                    <tr>
                                                                        <td><?php echo $od->product_name;?></td>
                                                                        <td class="text-center"><?php echo $od->product_unit_price;?></td>
                                                                        <td class="text-center"><?php echo $od->product_quantity;?></td>
                                                                        
                                                                    </tr>
                                                                <?php endforeach;?>  
                                                                <?php endforeach;?>  
                                                             
                                                                    <tr>
                                                                        <td class="emptyrow"></td>
                                                                        <td class="emptyrow"></td>
                                                                        <td class="emptyrow text-center"><strong>Total Items</strong></td>
                                                                        
                                                                        
                                                                        <td class="emptyrow text-right"><?php //echo $value; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                                                        <td class="emptyrow"></td>
                                                                        <td class="emptyrow text-center"><strong>Total</strong></td>
                                                                        <td class="emptyrow text-right"><?php if(isset($grand_total)) echo $grand_total ; //$this->session->userdata('grand_total'); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</div>
</div>