<div class="wrap">
<div class="postbox-container">
<div id="tables_admin">
<div class="postbox">
<span>
<h3 class='hndle'>General Settings</h3>
</span>
<br>
<div class="inside">
<h3 class='hndle'>Owners</h3>
<div id="table_owner">
<table id="table_dis" class="table table-striped table-bordered" >
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
      <th>Email #2</th> 
      <th>Options</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($results_owners as $key_owner) {
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
    <td> <?php echo $key_owner->email2; ?> </td> 
    <td>
      <a type="button" class="button button-primary" href="<?php echo get_site_url().'/index.php/edit-owner/?id='.$key_owner->id; ?>" target="blank">Edit owner</a>
      <button type="button" class="button button-primary" onclick="deleteowner('<?php echo $key_owner->id; ?>')">Delete</button>
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
      <th>Email #2</th> 
      <th>Options</th>
    </tr>
</tfoot>	
</table>
</div>
</div>
<div class="inside">
<h3 class='hndle'>Contractors</h3>
<div id="table_owner">
<table id="table_con" class="table table-striped table-bordered" >
<thead>
  <tr>
      <th>Company name</th> 
      <th>Street</th> 
      <th>City</th> 
      <th>State</th> 
      <th>Zip</th> 
      <th>Phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($results_contractors as $key_contractors) {
?>  
  <tr>
    <td> <?php echo $key_contractors->company; ?> </td>  
    <td> <?php echo $key_contractors->street; ?> </td> 
    <td> <?php echo $key_contractors->city; ?> </td> 
    <td> <?php echo $key_contractors->state; ?> </td> 
    <td> <?php echo $key_contractors->zip; ?> </td> 
    <td> <?php echo $key_contractors->phone; ?> </td> 
    <td> <?php echo $key_contractors->email; ?> </td> 
    <td>
      <a type="button" class="button button-primary" href="<?php echo get_site_url().'/index.php/edit-contractors/?id='.$key_contractors->id; ?>" target="blank">Edit contractors</a>
      <button type="button" class="button button-primary" onclick="deletecontractors('<?php echo $key_owner->id; ?>')">Delete</button>
    </td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
    <tr>
      <th>Company name</th> 
      <th>Street</th> 
      <th>City</th> 
      <th>State</th> 
      <th>Zip</th> 
      <th>Phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</tfoot>  
</table>
</div>
</div>
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
  jQuery("#table_con").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  });     
});  
function deleteowner(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'delete_owner',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      location.reload();
    });
    }
    return false;
}
function deletecontractors(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'delete_contractors',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      location.reload();
    });
    }
    return false;
}
</script>