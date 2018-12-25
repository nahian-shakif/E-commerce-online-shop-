<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><?php if(isset($BreadCumbs)) echo $BreadCumbs; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container" id="exTab1">
  <h2>User Control Panel  <a class="btn btn-danger" href="<?php echo site_url('Login/user_logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Log out </a></h2>
 
  <ul class="nav nav-pills">
    <li class="<?php if(isset($userdata)){echo 'active';}?>"><a data-toggle="pill" href="#home" style="margin-left: 14px;">Settings</a></li>
    <li><a data-toggle="pill" href="#menu1" style="margin-left: 14px;">My Purchases</a></li>
    <!-- <li><a data-toggle="pill" href="#menu2" style="margin-left: 14px;">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3" style="margin-left: 14px;">Menu 3</a></li> -->
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in <?php if(isset($userdata)){echo 'active';}?>">
    <div class="container setting">
<?php foreach($userdata as $ad) :?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"></h3>
                <h4>Change details</h4>
                <hr>
                <br>
                <p><strong> Email:  </strong> <?php echo $ad->email;  ?></p>
            </div>
        </div>
        <?php echo form_open('Profile/AccountUpdate', array('class' => 'aform')); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $ad->fullname;  ?>" class="input-height form-control" id="name"  name="fullname">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                    <label for="name">Location</label>
                    <input type="text" value="<?php echo $ad->address;  ?>" class="input-height form-control" id="name"  name="address">
                </div>
           </div>
           
       </div> 
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                    <label for="name">Mobile</label>
                    <input type="text" value="<?php echo $ad->phone;  ?>" class="input-height form-control" id="name" placeholder="Ex. Sylhet" name="phone">
                    <input type="hidden" name="client_id" value="<?php echo $ad->client_id;  ?>">
                </div>
           </div>
           
       </div>
       <div class="row">
           <div class="col-md-12">
               <button type="submit" class="btn btn-success">Update details</button>
           </div>
       </div> 
       <div class="row">
           <div class="col-md-12">
               <div class="SuccessMessageAccount"></div>
           </div>
       </div> 
      <?php echo form_close()?> 
<?php  endforeach; ?>      
       <br>  
       <br>
       <hr>   
<?php foreach($userdata as $ad) :?>       
       <!-- <div class="row">
            <div class="col-md-12">
                <h4>Change password</h4>
                <hr>
            </div>
        </div>  
        
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Current password</label>
                    <input type="password" value="<?php //echo //$ad->agent_password; ?>" class="input-height form-control" id="name"  name="password">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
        <?php //echo form_open('Services/AccountPasswordUpdate', array('class' => 'pform')); ?>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">New password</label>
                    <input type="password" class="input-height form-control" id="password"  name="agent_password">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Confirm new password</label>
                    <input type="password" class="input-height form-control" id="confirm_password"  name="password">
                    <input type="hidden" name="agent_id" value="<?php //echo $ad->agent_id; ?>">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>  
        <div class="row">
           <div class="col-md-6" id="message">
               <div style="font-weight:bold" ></div>
           </div>
       </div>
       <div class="row">
          
               <div classs="SuccessMessageAccountPassword"></div>

       </div> 
        <div class="row">
           <div class="col-md-12">
               <button type="submit" name="submit" id="PWDButton" class="btn btn-success">Change password</button>
           </div>
       </div>  -->
       <?php //echo form_close()?>  
       
       
       <hr> 
       <div class="row">
           <div class="col-md-12">
               <a class="btn btn-danger" href="<?php echo site_url('Login/user_logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Log out </a>
           </div>
       </div>
       
       
       <hr>                               
             
    </div>
<?php   endforeach; ?>  
    </div>
 <div id="menu1" class="tab-pane fade">
    <div class="container setting">

        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">List of my purchases</h3>
                <h4>List</h4>
                <hr>
                          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Product Name</th>
                  <th>Product Quantity</th>
                  <th>Product Price</th>
                  <th>Product Status</th>
                </tr>
              </thead>
              <tbody>
              <?php $counter = 1; $status; ?>
              <?php foreach($myproducts as $mp):?>
                <tr>
                  <td><?php echo $counter++ ;?></td>
                  <td><?php echo $mp->product_name;?></td>
                  <td><?php echo $mp->product_quantity;?></td>
                  <td><?php echo $mp->product_quantity * $mp->product_unit_price;?> &#2547;</td>
                  <?php if($mp->status == '4'){
                      $status = "This product has been Shipped, please check your regarding email address";
                  }if($mp->status =='3'){
                    $status = "This product purchase hass been confirmed. Please check your regarding email address";
                  }
                    ?>
                  <td><?php echo $status;?></td>
                </tr>
                <?php endforeach;?>
                
              </tbody>
            </table>
            </div>
        </div>

    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>