<div class="container border">
<div id="container_form_offer">
  <form id="offer_form">
    <div class="row">
      <div class="col">
        <div class="form-group">
            Offer Number: <?php echo $offer_number; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
            Amount: <?php echo $amount; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Start date: <?php echo $startdate; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Description:
            <?php echo $description; ?>
        </div>
      </div>
    </div>
    <?php if($key=='1'){ ?>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Contractor Email: <?php echo $contractor_email; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
            Contractor Phone: <?php echo $contractor_phone; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Contractor Address: <?php echo $contractor_street.' '.$contractor_state.' '.$contractor_zip; ?>
        </div>
      </div>
    </div> 
    <?php } ?>
    <div class="row">
      <div class="col">
        <div class="form-group">
            <input type="hidden" name="offer_bid_id" id="offer_bid_id" value="<?php echo $bid_id; ?>">
        </div>
      </div>
    </div>
  </form>
</div>
</div>
