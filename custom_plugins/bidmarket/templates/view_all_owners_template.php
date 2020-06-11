<h3 class='hndle'>Owners</h3>
<div id="table_owner" class="table-responsive">
<table id="table_dis" class="table table-hover" >
<thead>
	<tr>
      <th>Customer ID</th> 
      <th>First name</th> 
      <th>Last name</th> 
      <th>Street</th> 
      <th>City</th> 
      <th>State</th> 
      <th>Zip</th> 
      <th>Phone #1</th> 
      <th>Phone #2</th> 
      <th>Email #1</th> 
      <th>Options</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($results_owner as $key_owner) {
?>	
  <tr>
    <td> <?php echo $key_owner->customerid; ?> </td>  
    <td> <?php echo $key_owner->firstname; ?> </td> 
    <td> <?php echo $key_owner->lastname; ?> </td> 
    <td> <?php echo $key_owner->street; ?> </td> 
    <td> <?php echo $key_owner->city; ?> </td> 
    <td> <?php echo $key_owner->state; ?> </td> 
    <td> <?php echo $key_owner->zip; ?> </td> 
    <td> <?php echo $key_owner->phone; ?> </td> 
    <td> <?php echo $key_owner->phone2; ?> </td> 
    <td> <?php echo $key_owner->email; ?> </td> 
    <td>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View owner</button>
    </td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
    <tr>
      <th>Customer ID</th> 
      <th>First name</th> 
      <th>Last name</th> 
      <th>Street</th> 
      <th>City</th> 
      <th>State</th> 
      <th>Zip</th> 
      <th>Phone #1</th> 
      <th>Phone #2</th> 
      <th>Email #1</th> 
      <th>Options</th>
    </tr>
</tfoot>	
</table>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Owner</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="modal_body">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
jQuery(document).ready( function($) {
  jQuery("#table_dis").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  });  
});
function view_owner(id){
    var data= {
        action:'owner_modal',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      jQuery("#modal_body").html((response));
    });
}
</script>