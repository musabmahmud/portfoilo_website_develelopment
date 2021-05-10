<?php 
  require 'inc/header.php';
  require_once '../db.php';
?>

<?php

  $select = "SELECT * FROM messages";
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
          <h1 class="text-center text-uppercase">Messages</h1>
          <div class="text-right"></div>
        </div><!-- sl-page-title -->
        <table id="myTable" class="table table-striped table-bordered table-hover table-lg">
          <thead>
            <tr class="text-uppercase text-info">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Messages</th>
              <th>Status</th>
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
              <td><?php echo $value['email'];?></td>
              <td><?php echo $value['summary'];?></td>
              <td>
              <?php if($value['status'] == 1): ?>
                <a class="btn btn-primary" href="message_status.php?id=<?= $value['id'];?>"><i class="fa fa-edit"></i> Read</a>
                <?php else:?>
                <a class="btn btn-info" href="message_status.php?id=<?= $value['id'];?>"><i class="fa fa-envelope"></i> Unread</a>
                <?php endif ?></td>
              <td>
                <a class="socialDelete btn btn-danger" data-id="delete.php?id=<?= $value['id'];?>">Delete</a>
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