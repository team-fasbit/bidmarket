<div class="container mt-3">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" role="tab" data-toggle="tab" href="#ownerdashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#mycontractors"><i class="fa fa-wrench"></i> Contractors</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#myprojects"><i class="fa fa-gavel"></i> Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#ownerprofile"><i class="fa fa-vcard-o"></i> Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#owneraccount"><i class="fa fa-user-circle-o"></i> My Account</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">  
    <div id="ownerdashboard" role="tabpanel" class="container tab-pane active"><br>
      <h2>Dashboard</h2>
      <h5>
      <div class="row">
        <div class="col">
          Hi <?php echo $firstname.', '.$lastname; ?>
        </div>
      </div>
      </h5>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-gavel"></i> My Projects</div>
              <div class="card-body">
               <?php view_bids(); ?>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-wrench"></i> Contractors</div>
              <div class="card-body">
               List of contractors...
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-gavel"></i> Completed</div>
              <div class="card-body">
               <?php view_completed_bids(); ?>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-phone"></i> Calls</div>
              <div class="card-body">
               List of calls...
              </div>
          </div>
        </div>
      </div>

    </div>
    <div id="mycontractors" role="tabpanel" class="container tab-pane"><br>
     <h2>Contractors content tab here</h2>
       <h3 class='hndle'><i class="fa fa-wrench"></i> Contractors list</h3>
       <div id="table_contractors" class="table-responsive">
       <table id="table_cont2" class="table table-hover" >
        <thead>
          <tr>
              <th>Company name</th> 
              <th>Street</th> 
              <th>City</th> 
              <th>State</th> 
              <th>Zip</th> 
              <th>Phone #1</th> 
              <th>Phone #2</th> 
              <th>Email #1</th> 
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results_contractors as $key_contractor) {
        ?>  
          <tr>
            <td> <?php echo $key_contractor->company; ?> </td> 
            <td> <?php echo $key_contractor->street; ?> </td> 
            <td> <?php echo $key_contractor->city; ?> </td> 
            <td> <?php echo $key_contractor->state; ?> </td> 
            <td> <?php echo $key_contractor->zip; ?> </td> 
            <td> <?php echo $key_contractor->phone; ?> </td> 
            <td> <?php echo $key_contractor->phone2; ?> </td> 
            <td> <?php echo $key_contractor->email; ?> </td> 
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
                <th>Phone #1</th> 
                <th>Phone #2</th> 
                <th>Email #1</th> 
              </tr>
          </tfoot>  
          </table>
      </div>      
    </div>
    <div id="myprojects" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-gavel"></i> Post New Project Here</div>
            <div class="card-body"><?php view_bids_form(); ?>
            </div>
          </div>                
        </div>
      </div>
    </div>
    <div id="ownerprofile" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-info"></i> Owner Info</div>
            <div class="card-body"><?php view_profile_owner(); ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-gavel"></i> Preferred Projects</div>
            <div class="card-body"><?php view_preferred_projects(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-check-circle-o"></i> Preferred Priorities</div>
            <div class="card-body"><?php view_preferred_priorities(); ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-vcard"></i> My Address</div>
            <div class="card-body"><?php view_profile_owner_address(); ?>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div id="owneraccount" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-address-card-o"></i> Account info</div>
            <div class="card-body"><?php view_account_info(); ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-phone"></i> Contact info</div>
            <div class="card-body">
              <?php view_account_owner_contact(); ?>
            </div>
          </div>
        </div>
    </div>    
  </div>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
var datedef="<?php echo $date; ?>";
jQuery(document).ready( function($) {  
  jQuery('.nav-tabs a').on('click', function (event) {
    event.preventDefault();
    jQuery("#ownerdashboard").hide();
    jQuery("#mycontractors").hide();
    jQuery("#myprojects").hide();
    jQuery("#ownerprofile").hide();
    jQuery("#owneraccount").hide(); 
    var this_tab=jQuery(this).attr('href');

    jQuery('.active').removeClass('active');
    jQuery(this).parent().addClass('active');
    //jQuery('.tab-content div').hide();
    jQuery(jQuery(this).attr('href')).show();
  });
  jQuery("#table_cont2").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  }); 
});
</script>
