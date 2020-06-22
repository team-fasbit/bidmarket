<div class="container border">
  <div id="bids_container">
   <h1>Bids</h1>
   <form id="bid_form">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Bid ID #:
                <input type="hidden" name="owner_id" id="owner_id" value="<?php echo $owner_id; ?>">
                <input type="hidden" name="contractor_id" id="contractor_id" value="<?php echo $contractor_id; ?>">
                <input type="text" id="bid" name="bid" disabled value="<?php echo $bidnumber; ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Amount:
                <input type="text" id="amount" name="amount" disabled value="<?php echo $amount; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Description:
                <?php echo $description; ?>
            </div>
        </div>        
    </div>    
</form>
</div>
</div>
