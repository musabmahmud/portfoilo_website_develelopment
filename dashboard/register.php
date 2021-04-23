<?php
    session_start();
    require_once '../db.php';
?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check_user= "SELECT * FROM users";
    $q = mysqli_query($db,$check_user);
    $result = mysqli_fetch_assoc($q);

    if($name = "" || $username= "" || $email = "" || $pass = ""){
      $_SESSION['regi'] = "Field Must not Empty";
      die();
    }

    else{
      $insert = "INSERT INTO users (name,username, email, password) VALUES('$name','$username','$email','$pass')";
      $query = mysqli_query($db,$insert);
        if ($query) {
          $_SESSION['regi'] = "User Insert Succesfully";
          header("Location:login.php");
        }
        else{
          $_SESSION['regi'] = "Failed to Insert";
          echo $_SESSION['regi'];
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../assets/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>

        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter your Name" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter your Username" name="username">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your Email" name="email">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            <?php
              if(isset($_SESSION['regi'])){
                echo $_SESSION['regi'];
              }
             ?>

            <div class="mg-t-60 tx-center">Already a member?<a href="login.php" class="tx-info">Sign In</a></div>
          </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="../assets/lib/jquery/jquery.js"></script>
    <script src="../assets/lib/popper.js/popper.js"></script>
    <script src="../assets/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
