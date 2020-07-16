<div class="container border">
  <div id="bids_container">
    <h1><i class="fa fa-info-circle"></i> Info</h1>
      <div class="row">
        <div class="col-md-6">
          Bid #: <?php echo $bidnumber; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          Project type: <?php echo $project; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          Priority: <?php echo $priority; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php echo $description; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo plugin_dir_url( __FILE__ ). 'assets/uploads/'.$image; ?>  " width='314px' height='190px'/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div id="map_modal" style="height: 200px; width:314px"></div>
        </div>
      </div>      
</div>
</div>
<script type="text/javascript">
    var latitude=<?php echo $latlong[0]; ?>;      
    var longitude=<?php echo $latlong[1]; ?>; 
    jQuery(document).ready(function() {
    var map2;
    var marker2;     
      map2 = new google.maps.Map(document.getElementById('map_modal'), {
        zoom: 10,
        center: { lat: latitude, lng: longitude },
        mapTypeId: 'roadmap',
        gestureHandling: 'greedy'
      });
      marker2 = new google.maps.Marker({
        position: { lat: latitude, lng: longitude }
     });            
     marker2.setMap(map2);
    });    
</script>