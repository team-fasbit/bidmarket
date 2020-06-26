<div class="container mt-3">
  <h2>Toggleable Tabs</h2>
  <br>
<!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" role="tab" data-toggle="tab" href="#dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#leads">Leads</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#reports">Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#calendar">Calendar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#roi">ROI Calculator</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#profile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#account">My Account</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">  
    <div id="dashboard" role="tabpanel" class="container tab-pane active"><br>
      <h2>Dashboard</h2>
      <h4>Title</h4>
      <h5>
      <div class="row">
        <div class="col-md-6">
          Hi company_name.
        </div>
        <div class="col-md-3">
          $ 0.00 <br><br>
          Last Payment
        </div>
        <div class="col-md-3">
          $ 0.00 <br><br>
          Balance
        </div>                
      </div>
      </h5>
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col">
              <div class="row">              
                <div class="col">
                  <div class="card">
                    <div class="card-header">Report Last 30 days</div>
                    <div class="card-body">
                      <p>0<br>Received</p><br>
                      <p>$ 0.00<br>Spent</p>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="row">              
                <div class="col">
                  <div class="card">
                    <div class="card-header">Missed Lead</div>
                    <div class="card-body">0</div>
                  </div>                
                </div>
              </div>
              <div class="row">              
              <div class="col">
                <div class="card">
                  <div class="card-header">Missed Potential Jobs</div>
                  <div class="card-body">$ 0.00</div>
                </div>                
              </div>
              </div>
              <div class="row">              
                <div class="col">
                  <div class="card">
                    <div class="card-header">Average Quote</div>
                    <div class="card-body">$ 0.00</div>
                  </div>                
                </div>
              </div>
              <div class="row">              
                <div class="col">
                  <div class="card">
                    <div class="card-header">Jobs won</div>
                    <div class="card-body">$ 0.00</div>
                  </div>                
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header">Upcoming Estimates</div>
                <div class="card-body">Calendar here...</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header">Third Column</div>
            <div class="card-body">Third column content...</div>
          </div>
        </div>
      </div>
    </div>
    <div id="leads" role="tabpanel" class="container tab-pane"><br>
     <h2>Leads content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="reports" role="tabpanel" class="container tab-pane"><br>
     <h2>Reports content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="calendar" role="tabpanel" class="container tab-pane"><br>
     <h2>Calendar content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="roi" role="tabpanel" class="container tab-pane"><br>
     <h2>ROI content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="profile" role="tabpanel" class="container tab-pane"><br>
     <h2>Profile content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="account" role="tabpanel" class="container tab-pane"><br>
     <h2>Account content tab here</h2>
     <h4>Title</h4>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery(document).ready( function($) {  
  jQuery('.nav-tabs a').on('click', function (event) {
    event.preventDefault();
    jQuery("#dashboard").hide();
    jQuery("#leads").hide();
    jQuery("#reports").hide();
    jQuery("#calendar").hide();
    jQuery("#roi").hide();
    jQuery("#profile").hide();
    jQuery("#account").hide();    
    var this_tab=jQuery(this).attr('href');

    jQuery('.active').removeClass('active');
    jQuery(this).parent().addClass('active');
    //jQuery('.tab-content div').hide();
    jQuery(jQuery(this).attr('href')).show();
  });
});
</script>