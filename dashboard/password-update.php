<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>
  <!-- ########## START: MAIN PANEL ########## -->

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active"></span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <form class="form-horizontal" action="inc/pass_update.php">
          <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Old Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Enter Your Old Password" value="" name="oldpass">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Current Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Enter Your Current Password" value="" name="newpass">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Re-Type Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Enter Same Password Again" value="" name="samepass">
              <?php if(isset($_SESSION['invalid'])){
                  echo $_SESSION['invalid'];
              }?>
            </div>
          </div>
          <div class="form-group col-md-12">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-lg text-uppercase text-right float-right" name="pass_update">Update</button>
            </div>
          </div>
          </div>
        </form>
        </div><!-- sl-page-title -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 
  require 'inc/footer.php';
?>