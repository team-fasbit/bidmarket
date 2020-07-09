<div class="container mt-3">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" role="tab" data-toggle="tab" href="#dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#leads"><i class="fa fa-users"></i> Leads</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#reports"><i class="fa fa-bar-chart"></i> Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#calendar_content"><i class="fa fa-calendar"></i> Calendar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#roi"><i class="fa fa-calculator"></i> ROI Calculator</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#profile"><i class="fa fa-vcard-o"></i> Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#account"><i class="fa fa-user-circle-o"></i> My Account</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">  
    <div id="dashboard" role="tabpanel" class="container tab-pane active"><br>
      <h2>Dashboard</h2>
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
                <div class="card-body"><div id="calendar_dashboard"></div></div>
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
       <h3 class='hndle'>Leads</h3>
       <div id="table_owner" class="table-responsive">
       <table id="table_dis2" class="table table-hover" >
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
              </tr>
          </tfoot>  
          </table>
      </div>      
    </div>
    <div id="reports" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Leads</div>
            <div class="card-body">0
              <div class="chart">
                <canvas id="reportleads"></canvas>
              </div>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Spent</div>
            <div class="card-body"> $ 0.00</div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Missed Lead</div>
            <div class="card-body">0
              <div class="chart">
              <canvas id="missed"></canvas>             
              </div>
            </div>
          </div>                
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Missed Potential Jobs Value</div>
            <div class="card-body">$ 0.00
              <div class="chart">
              <canvas id="jobsmissed"></canvas>
              </div>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Jobs Won</div>
            <div class="card-body">0
              <div class="chart">
              <canvas id="jobswon"></canvas>
              </div>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Revenue</div>
            <div class="card-body">$ 0.00 </div>
          </div>                
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Estimates</div>
            <div class="card-body">0
              <div class="chart">
              <canvas id="estimates"></canvas>
              </div>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Total Discount</div>
            <div class="card-body">$0.00</div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Avg Speed to Call</div>
            <div class="card-body">0<sup>H</sup> 0<sup>M</sup> 0<sup>S</sup> </div>
          </div>                
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Avg Number of Days Called</div>
            <div class="card-body">0</div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Avg Calls Per Lead</div>
            <div class="card-body">0,00</div>
          </div>                
        </div>
        <div class="col">
        </div>
      </div>
    </div>
    <div id="calendar_content" role="tabpanel" class="container tab-pane"><br>
     <h2>Calendar content tab here</h2>
      <h4>Title</h4>
      <div id="calendar7"></div>
    </div>
    <div id="roi" role="tabpanel" class="container tab-pane"><br>
     <h2>ROI content tab here</h2>
      <h4>Title</h4>
    </div>
    <div id="profile" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Company Form</div>
            <div class="card-body"><?php view_contractors_dashboard_form(); ?>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Company Logo</div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col" style="text-align: center;">
                    <?php if (empty($companylogo)){ echo "<i class='fa fa-photo' style='font-size:100px;'></i>";  } else{ ?>
                    <img src="<?php echo plugin_dir_path( __DIR__ ). 'bidmarket/template/assets/uploads/'; ?>" />
                    <?php } ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      Image:
                      <input type="hidden" id="picture" name="picture">
                      <div id="fileupload3">Image</div>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div id="account" role="tabpanel" class="container tab-pane"><br>
     <h2>Account content tab here</h2>
     <h4>Title</h4>
    </div>
  </div>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
var datedef="<?php echo $date; ?>";
jQuery(document).ready( function($) {  
  jQuery('.nav-tabs a').on('click', function (event) {
    event.preventDefault();
    jQuery("#dashboard").hide();
    jQuery("#leads").hide();
    jQuery("#reports").hide();
    jQuery("#calendar_content").hide();
    jQuery("#roi").hide();
    jQuery("#profile").hide();
    jQuery("#account").hide();    
    var this_tab=jQuery(this).attr('href');

    jQuery('.active').removeClass('active');
    jQuery(this).parent().addClass('active');
    //jQuery('.tab-content div').hide();
    jQuery(jQuery(this).attr('href')).show();
  });
  jQuery("#calendar_dashboard").fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay',
    },
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' },
      listMonth: { buttonText: 'list month' }
    },    
    defaultView: 'listWeek',     
    defaultDate: datedef,
    //events: 'https://fullcalendar.io/demo-events.json',
    navLinks: true, 
    editable: true, 

  });
  jQuery('#calendar7').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },   
    defaultDate: datedef,
    navLinks: true, 
    editable: true, 
  });
  jQuery("#table_dis2").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  }); 
  jQuery("#fileupload3").uploadFile({
          url: ajaxurl,
          formData: { action: 'uploadfile' },
          fileName:"myfile",
          allowedTypes: "jpg,png,gif",
          maxFileSize: "5358562",
          allowDuplicates: false,
          duplicateStrict: true,
          showFileCounter: false,
          maxFileCount:1,
          showStatusAfterSuccess: true,
          showProgress: true,  
          onSuccess:function(data)
           {
             jQuery("#picture").val(data); 
           }
  });   
});
jQuery(function () {
  var config2 = {
    type: 'line',
    data: {
        labels: ["", "", "", "", "", "", "","","","","",""],
        datasets: [{
            label: "",
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [0,0,0,0,0,0,0,0,0,0,0,0],
            fill: false,
        }],
    },
    options: {
        responsive: true,
        title:{
            display:true,
            text:''
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: ''
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: ''
                }
            }]
        }
    }
  };
  var ctx1 = jQuery("#reportleads");
  var ctx2 = jQuery("#missed");
  var ctx3 = jQuery("#jobsmissed");
  var ctx4 = jQuery("#jobswon");
  var ctx5 = jQuery("#estimates");
  var myNewLine1 = new Chart(ctx1, config2); 
  var myNewLine2 = new Chart(ctx2, config2); 
  var myNewLine3 = new Chart(ctx3, config2); 
  var myNewLine4 = new Chart(ctx4, config2); 
  var myNewLine5 = new Chart(ctx5, config2); 
});  
</script>
