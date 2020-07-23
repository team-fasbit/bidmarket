<div id="table_contractor" class="table-responsive">
<table id="table_bidcontr" class="table table-hover" >
<thead>
	<tr>
    <th>Offer ID</th> 
    <th>Project Type</th> 
    <th>Priority</th> 
    <th>Amount</th> 
    <th>Options</th>
  </tr>
</thead>
<tbody>
<?php
foreach ($results_bids as $key_contractor) {
?>	
  <tr>
    <td> <?php echo $key_contractor->bid_number; ?> </td>  
    <td> <?php echo $key_contractor->project; ?> </td> 
    <td> <?php echo $key_contractor->priority; ?> </td> 
    <td> <?php echo $key_contractor->amount; ?> </td> 
    <td>
      <a type="button" class="btn btn-primary bidmarket_button" data-toggle="modal" data-target="#myContractorProjectsModal" onclick="view_info(<?php echo $key_contractor->id; ?>)"><i class="fa fa-info-circle"></i></a>
    </td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
  <tr>
    <th>Offer ID</th> 
    <th>Project Type</th> 
    <th>Priority</th> 
    <th>Amount</th> 
    <th>Options</th>
    </tr>
</tfoot>	
</table>
</div>
<div class="modal" id="myContractorProjectsModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-gavel"></i></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="projects_contractor_modal_body">
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
  jQuery("#table_bidcontr").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  });  
});
function view_info(id){
    var data= {
        action:'view_info',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      jQuery("#projects_contractor_modal_body").html((response));
    });
}
</script>