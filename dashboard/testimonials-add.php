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
        <h2>Add Portfolio</h2>
        </div><!-- sl-page-title -->
        <form class="form-horizontal" action="testimonials-post.php" method="POST" enctype="multipart/form-data">
          <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Job Position:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Enter Postion in the company" name="position">
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-sm-12">
              <textarea type="text" class="form-control" placeholder="Enter Your Quotes" name="quotes" rows="7"></textarea>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Image:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control"
              id="thumbnail" name="thumbnail" onchange="document.getElementById('image').src= window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Preview:</label>
            <div class="col-sm-10">
              <img id="image" src="../front/img/images/<?= $result['thumbnail']?>" width="100" height="100">
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