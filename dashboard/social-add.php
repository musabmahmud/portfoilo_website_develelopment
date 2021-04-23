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
        <div class="sl-page-title"></div>
        <form class="form-horizontal" method="POST" action="service-post.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Social Name" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Icon :<span class="tx-danger">*</span></label>
            <div class="col-sm-10">
              <select name="icon" id="icon" class="form-control">
                <option value>Select Social</option>
                <option value="fab fa-facebook">Facebook</option>
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-linkedin">LinkedIn</option>
                <option value="fab fa-whatsapp">Whatsapp</option>
                <option value="fab fa-viber">Viber</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Link:<span class="tx-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Example : https://www.facebook.com" name="link">
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default bg-primary text-uppercase text-right float-right text-white" name="register">Submit</button>
            </div>
          </div>
        </form>
        </div>
        <br><br><br>
        <div>
          <a href="socials.php" class="btn btn-primary"><i class="fa fa-back"></i>Back</a>
        </div>
        </div><!-- sl-page-title -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 
  require 'inc/footer.php';
?>