<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>

<?php
  $id = $_GET['id'];
  $select = "SELECT * FROM users WHERE id = '$id'";
  $query = mysqli_query($db,$select);
  $result = mysqli_fetch_assoc($query);
  $_SESSION['id'] = $id;
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
          <form class="form-horizontal" action="inc/profile_update.php" method="POST" enctype="multipart/form-data">
          <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Your Name" value="<?=$result['name'];?>" name="name">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Your Username" value="<?=$result['username'];?>" name="username">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Image:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control"
              id="profile_image" name="profile_image" onchange="document.getElementById('image_id').src= window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="Enter Your Email" value="<?=$result['email'];?>"  name="email">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label col-sm-2">Preview:</label>
            <div class="col-sm-10">
              <img id="image_id" src="../assets/img/<?= $result['profile_image']?>" width="150" height="150">
            </div>
          </div>
          <div class="form-group col-md-12">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-lg text-uppercase text-right float-right" name="pro_update">Update</button>
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