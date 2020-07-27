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
                <?php
                if(set_button($key_bid->id)> 0){
                  echo '<a type="button" class="btn btn-primary bidmarket_button" data-toggle="modal" data-target="#mySendOfferModal" onclick="view_offer('.$key_bid->id.')"><i class="fa fa-send"></i></a> '; 
                }
                else {
                  echo '<a type="button" class="btn btn-primary bidmarket_button" data-toggle="modal" data-target="#mySendOfferModal" onclick="send_offer('.$key_bid->id.')"><i class="fa fa-send"></i></a> ';                  
                }
                ?>               
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
<script type="text/javascript">
  jQuery("#table_available_projects").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  });
</script>