<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

      $insert = "INSERT INTO users (name,username, email, password) VALUES('$name','$username','$email','$pass')";
      $query = mysqli_query($db,$insert);
      if ($query) {
        $_SESSION['insert'] = "User Insert Succesfully";
        header("Location:users.php");
      }
      else{
        echo "Try Again";
      }
  }
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
          <form class="form-horizontal" method="POST" action="user-edit.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Your Username" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Enter Your Name" name="password">
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default bg-primary text-uppercase text-right float-right" name="register">Submit</button>
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