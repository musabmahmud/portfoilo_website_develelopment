<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>

<?php
  $select = "SELECT * FROM settings";
  $query = mysqli_query($db,$select);


  $select_count = "SELECT COUNT(*) as total FROM settings";
  $query_count = mysqli_query($db,$select_count);
  $assoc = mysqli_fetch_assoc($query_count);

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
          <h1 class="text-center text-uppercase">System Settings</h1>
          <?php 
            if(!$assoc['total'] > 0):
          ?>
          <div class="text-right"><a href="setting-edit.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a></div>
          <?php endif ?>
        </div><!-- sl-page-title -->
        <table id="myTable" class="table table-striped table-bordered table-hover table-lg">
          <thead>
            <tr class="text-uppercase text-info">
              <th>ID</th>
              <th>Tagline</th>
              <th>About</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Copyright</th>
              <th>Office Address</th>
              <th>Logo1 (White Background)</th>
              <th>Logo2 (black Background)</th>
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
              <td><?php echo $value['tagline'];?></td>
              <td><?php echo $value['about'];?></td>
              <td><?php echo $value['email'];?></td>
              <td><?php echo $value['phone'];?></td>
              <td><?php echo $value['copyright'];?></td>
              <td><?php echo $value['office_address'];?></td>
              <td><img src="../front/img/logo/<?php echo $value['logo'];?>" width="100" height="100"></td>
              <td><img src="../front/img/logo/<?php echo $value['logo_black'];?>" width="100" height="100"></td>
              <td>
                <a class="btn btn-warning" href="setting-edit.php?id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i> Edit</a>
            </tr>
    <?php
    }
    ?>   
          </tbody>
        </table>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 
  require 'inc/footer.php';
?>