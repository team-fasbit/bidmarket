<div class="container mt-3">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" role="tab" data-toggle="tab" href="#contractors_dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#contractors_dashboard_projects"><i class="fa fa-gavel"></i> Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#contractors_dashboard_reports"><i class="fa fa-bar-chart"></i> Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#contractors_dashboard_calendar_content"><i class="fa fa-calendar"></i> Calendar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#contractors_dashboard_profile"><i class="fa fa-vcard-o"></i> Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#contractors_dashboard_account"><i class="fa fa-user-circle-o"></i> My Account</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">  
    <div id="contractors_dashboard" role="tabpanel" class="container tab-pane active"><br>
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
        <div class="col">
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
                <div class="card-header">My Offers</div>
                <div class="card-body"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contractors_dashboard_projects" role="tabpanel" class="container tab-pane"><br>
     <h2>Projects available</h2>
     <?php view_available_project_info(); ?>
    </div>
    <div id="contractors_dashboard_reports" role="tabpanel" class="container tab-pane"><br>
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
    <div id="contractors_dashboard_calendar_content" role="tabpanel" class="container tab-pane"><br>
     <h2>Calendar content tab here</h2>
      <h4>Title</h4>
      <?php view_dashboard_calendar_info(); ?>
    </div>
    <div id="contractors_dashboard_profile" role="tabpanel" class="container tab-pane"><br>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-id-card-o"></i> Company Form</div>
            <div class="card-body"><?php view_contractors_dashboard_form(); ?>
            </div>
          </div>                
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-image"></i> Company Logo</div>
            <div class="card-body">
              <div class="container border">
                <div class="row">
                  <div class="col" style="text-align: center;">
                    <div id="container_logo">
                    <?php 
                    $user_id=wp_get_current_user()->ID;
                    $img=get_user_meta( $user_id, '_image_logo', true );
                    if (empty($img)){ echo "<i class='fa fa-photo' style='font-size:100px;'></i>";  } else{ ?>
                      <img src="<?php echo plugin_dir_url( __FILE__ ). 'assets/uploads/'.$img; ?>  " width='314px' height='190px'/>
                    <?php } ?>
                    </div>
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
    <div id="contractors_dashboard_account" role="tabpanel" class="container tab-pane"><br>
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
            <div class="card-header"><i class="fa fa-credit-card"></i> Billing info</div>
            <div class="card-body">
            </div>
          </div>
        </div>
    </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-phone"></i> Contact info</div>
            <div class="card-body">
              <?php view_account_contractor_contact(); ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fa fa-money"></i> Payment history</div>
            <div class="card-body">
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
    jQuery("#contractors_dashboard").hide();
    jQuery("#contractors_dashboard_projects").hide();
    jQuery("#contractors_dashboard_reports").hide();
    jQuery("#contractors_dashboard_calendar_content").hide();
    jQuery("#contractors_dashboard_profile").hide();
    jQuery("#contractors_dashboard_account").hide();    
    var this_tab=jQuery(this).attr('href');

    jQuery('.active').removeClass('active');
    jQuery(this).parent().addClass('active');
    //jQuery('.tab-content div').hide();
    jQuery(jQuery(this).attr('href')).show();
  });
  jQuery("#fileupload3").uploadFile({
          url: ajaxurl,
          formData: { action: 'uploadlogo' },
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
             new_logo();
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
function new_logo(){
    var data= {
        action:'new_logo'
    };
    jQuery.post(ajaxurl, data, function(response) {
      jQuery("#container_logo").html((response));
    });  
}
</script>
