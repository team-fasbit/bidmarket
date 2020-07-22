       <div id="table_dashboard_contractors_projects" class="table-responsive">
       <table id="table_available_projects" class="table table-hover" >
        <thead>
          <tr>
              <th>Project Number</th> 
              <th>First name</th> 
              <th>Last name</th> 
              <th>Type</th> 
              <th>Priority</th> 
              <th>Option</th> 
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results_bids as $key_bid) {
        ?>  
          <tr>
            <td> <?php echo $key_bid->bid_number; ?> </td>  
            <td> <?php echo $key_bid->firstname; ?> </td> 
            <td> <?php echo $key_bid->lastname; ?> </td> 
            <td> <?php echo $key_bid->project; ?> </td> 
            <td> <?php echo $key_bid->priority; ?> </td> 
            <td>
                <a type="button" class="btn btn-primary bidmarket_button" data-toggle="modal" data-target="#myAvailableProjectsModal" onclick="view_info(<?php echo $key_bid->id; ?>)"><i class="fa fa-info-circle"></i></a>
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
              <th>Type</th> 
              <th>Priority</th> 
              <th>Option</th> 
              </tr>
          </tfoot>  
          </table>
      </div>  
<div class="modal" id="myAvailableProjectsModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-gavel"></i></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="modal_available_body">
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
  jQuery("#table_available_projects").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  }); 
  function view_info(id){
    var data= {
        action:'view_info',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      jQuery("#modal_available_body").html((response));
    });
  }    
</script>      