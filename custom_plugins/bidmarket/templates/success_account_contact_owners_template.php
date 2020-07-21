   <form id="view_account_owners_form">
     <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 1: <?php echo $phone1; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 2: <?php echo $phone2; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Email 1: <?php echo $email1; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Email 2: <?php echo $email2; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-twitter"></i> <?php if(!empty($twitter)){ echo $twitter; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-facebook"></i> <?php if(!empty($facebook)){ echo $facebook; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-instagram"></i> <?php if(!empty($instagram)){ echo $instagram; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <button type="button" class="btn btn-primary bidmarket_button" id="edit_account_owner"><i class="fa fa-pencil"></i> Edit</button>
            </div>
        </div>
    </div>
</form>
