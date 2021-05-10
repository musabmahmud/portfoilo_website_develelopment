<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>

<?php
  $select = "SELECT * FROM banner";
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
          <h1 class="text-center text-uppercase">System Settings</h1>
          <div class="text-right"><a href="banner-add.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a></div>
        </div><!-- sl-page-title -->
        <table id="myTable" class="table table-striped table-bordered table-hover table-lg">
          <thead>
            <tr class="text-uppercase text-info">
              <th>ID</th>
              <th>image</th>
              <th>status</th>
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
              <td><img src="../front/img/brand/<?php echo $value['image'];?>" width="200" height="200" alt=""></td>
              <td>
                <a class="btn btn-warning" href="banner-edit.php?id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i> Edit</a>
              </td>
              <td>
                <a class="btn btn-danger" href="banner-edit.php?id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i> Delete</a>
              </td>
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