<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>
  <!-- ########## START: MAIN PANEL ########## -->
<?php
$id = $_GET['id'];
$select_count = "SELECT * FROM settings WHERE id = '$id'";
$query_count = mysqli_query($db,$select_count);
$assoc = mysqli_fetch_assoc($query_count);

?>
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active"></span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h2>Add to Settings</h2>
        </div><!-- sl-page-title -->
          <form class="form-horizontal" action="setting-update.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="<?= $assoc['id']?>" name="id">
          <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Tagline:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $assoc['tagline']?>" placeholder="Enter Your Tagline" name="tagline">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" value="<?= $assoc['email']?>"  placeholder="Enter Your Email" name="email">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Phone:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $assoc['phone']?>" placeholder="Enter Your Phone" name="phone">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Copyright:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $assoc['copyright']?>"  placeholder="Enter Your Copyright" name="copyright">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-4">Office Address:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $assoc['office_address']?>"  placeholder="Enter Your Office Address" name="office_address">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Logo:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control"
              id="logo" name="logo" value="<?= $assoc['logo']?>" onchange="document.getElementById('logo_white').src= window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Logo White Preview:</label>
            <div class="col-sm-10">
              <img id="logo_white" src="../front/img/logo/<?= $result['logo']?>" width="150" height="150">
            </div>
          </div>
          
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Logo Black Background:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control"
              id="logo_black" name="logo_black" onchange="document.getElementById('image').src= window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Logo Preview::</label>
            <div class="col-sm-10">
              <img id="image" src="../assets/img/<?= $result['logo_black']?>" width="100" height="100">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">About:</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" value="$about"  placeholder="Enter Your About" name="about" rows="5"><?= $assoc['about']?></textarea>
            </div>
          </div>
          <div class="form-group col-md-12">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-lg text-uppercase text-right float-right" name="pro_update">Update</button>
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