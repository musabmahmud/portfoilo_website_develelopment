<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>

<?php
  $select = "SELECT * FROM users";
  $query = mysqli_query($db,$select);
?>

<?php
  $path = $_SERVER["PHP_SELF"];
  $parts = explode('/',$path);
  $file_ext = end($parts);
?>
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active"><?php print_r($file_ext) ;?></span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h1 class="text-center text-uppercase">All Users Here</h1>
        </div>
        <table id="myTable" class="table table-striped table-bordered table-hover table-lg">
          <thead>
            <tr class="text-uppercase text-info">
              <th>ID</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Image</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
      <?php
        $i = 0;
        foreach ($query as $value) {
          $i++;
      ?>    
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $value['name'];?></td>
              <td><?php echo $value['username'];?></td>
              <td><?php echo $value['email'];?></td>
              <td><img src="../assets/img/<?= $value['profile_image']?>" width="50"></td>
              <td><?php 
                  if($value['role'] == 1){
                    echo 'User';
                  }
                  elseif($value['role'] == 3){
                    echo 'Employee';
                  }
                  else{
                    echo 'Admin';
                  }
              ?></td>
              <td>
                <a class="btn btn-warning" href="profile-update.php?id=<?php echo $value['id'];?>">Edit</a>
                <a class="UserDelete btn btn-danger" data-id="<?= $value['id'];?>">Delete</a></td>
            </tr>
    <?php
      }
    ?>   
          </tbody>
        </table>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 
  require 'inc/footer.php';
?>