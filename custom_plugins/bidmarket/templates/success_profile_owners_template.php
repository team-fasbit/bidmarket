   <form id="view_owners_form">
     <div class="row">
        <div class="col">
            <div class="form-group">
                First Name: <?php echo $firstname; ?>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                Last Name: <?php echo $lastname; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col">
            <div class="form-group">Email: <?php echo $email1; ?>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                Email #2: <?php echo $email2; ?>
            </div>
        </div>        
    </div> 
     <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 1: <?php echo $phone1; ?>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                Phone 2: <?php echo $phone2; ?>
            </div>
        </div>
    </div>             
     <div class="row">
        <div class="col">
            <div class="form-group">
                Customer ID: <?php echo $customerid; ?>
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
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <button type="button" class="btn btn-primary bidmarket_button" id="edit_owner"><i class="fa fa-pencil"></i> Edit</button>
            </div>
        </div>
    </div>
</form>