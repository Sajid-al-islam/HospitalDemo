<?php 
require_once('class/library.php');
  $library = new Library();
  $result = $library->getAll();

  if(isset($_GET['id'])) {
    $msg = $library->deletedoc($_GET['id'],$_GET['imgUrl']);
  }
?>

<?php include('includes/menu.php');?>
    <h2 class="text-center">Doctor List</h2>
    <div class="container">
      <div class="row">
      <div class="col-md-4 ml-auto">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
      </div>
      <?php if(isset($msg)){ ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php echo $msg; ?></strong> 
        </div>
      <?php }?>
      <div class="col-md-12">
        <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Degree</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Visiting Time</th>
            <th>Visit</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="myTable">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo htmlspecialchars_decode($row['degree']); ?></td>
            <td>
              <?php echo $row['phone']; ?>
            </td>
            <td>
              <?php echo $row['email']; ?>
            </td>
            <td>
              <?php echo $row['visit_time']; ?>
            </td>
            <td><?php echo $row['visit']; ?></td>
            <td><img src="<?php echo $row['imgUrl']; ?>" class="img-thumbnail"></td>
            <td>
              <a href="editDoctor.php?id=<?php echo $row['id']; ?>" class="text-warning"><i class="fa fa-pencil"></i></a>
              <a href="delete.php?id=<?php echo $row['id']; ?>&imageUrl=<?php echo $row['imgUrl']; ?>" class="text-danger del"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
    </div>
    

<?php include('includes/footer.php');?>