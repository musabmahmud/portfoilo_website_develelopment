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
        <h2>Add Educations</h2>
        </div><!-- sl-page-title -->
          <form class="form-horizontal" action="educations-post.php" method="POST">
        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label col-sm-2">Education Name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Your Education Name" name="title">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="control-label col-sm-2">Passing Year:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="Enter Your Passing Year" name="year">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="control-label col-sm-2">Progress:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="Enter Your Education Progress in percentage%" name="progress">
                </div>
            </div>
            <div class="form-group col-md-12">        
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg text-uppercase text-right float-right" name="pro_update">Submit</button>
                </div>
            </div>
          </div>
        </form>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 
  require 'inc/footer.php';
?>