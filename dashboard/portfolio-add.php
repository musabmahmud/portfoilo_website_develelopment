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
        <form class="form-horizontal" action="portfolio-post.php" method="POST" enctype="multipart/form-data">
          <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Title:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Enter Your Title" name="title">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Category:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Enter Your Category" name="category">
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
              <img id="image" src="../assets/img/<?= $result['thumbnail']?>" width="100" height="100">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Image:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control"
              id="featured_image" name="featured_image" onchange="document.getElementById('image_id').src= window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Preview:</label>
            <div class="col-sm-10">
              <img id="image_id" src="../assets/img/<?= $result['featured_image']?>" width="150" height="150">
            </div>
          </div>

          <div class="form-group col-md-12">
            <div class="col-sm-12">
              <textarea type="text" class="form-control" placeholder="Enter Your Summary" name="summary"></textarea>
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