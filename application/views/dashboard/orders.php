<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>OrderID</th>
      <th>Customer Name</th>
      <th>Reference Number</th>
      <th>Order Status</th>
      <th>Order Date</th>
      <th>View Invoice</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php $set_order_status =''; ?>
  <?php foreach($OrderResOBJ as $ref => $orders): ?>
  <?php foreach($orders as $order) :?>
  <?php  $order_status =  $order->status;
                                                                        if($order_status == 3){
                                                                            $set_order_status = "Confirmed";
                                                                        }
                                                                      
                                                                        if($order_status == 4){
                                                                            $set_order_status = "Shipped";
                                                                        }?>
    <tr>
      <th scope="row"><?php echo $order->order_master_id; ?></th>
      <td><?php echo $order->fullname; ?></td>
      <td><?php echo $order->reference_no; ?></td>
      <td><?php echo $set_order_status; ?></td>
      <td><?php echo date("d F, Y || h:i A", strtotime($order->order_date_time)); ?></td>
      <td><button class="btn btn-success" onclick="location.href='<?php echo site_url('Orders/ViewInvoice/'.$order->order_master_id.'/'.$order->order_id.'/'.$order->client_id)?>'">Click To View</button></td>
    </tr>
  <?php endforeach;?>  
  <?php endforeach;?>  
  </tbody>
</table>

<script>
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
</script>