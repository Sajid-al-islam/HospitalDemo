<?php 
require_once 'class/library.php';

$name = $age = $gender = $email = $phone = "";

if(isset($_POST['btn'])) {

  //inserting name
  if($_POST['name'] == '') {
    echo "Insert Name";
  }
  else {
    $name = $_POST['name'];
  }

  //inserting degree
  if($_POST['age'] == '') {
    echo "Insert age";
  }
  else {
    $age = $_POST['age'];
  }

    //inserting degree
  if($_POST['gender'] == '') {
    echo "Insert gender";
  }
  else {
    $gender = $_POST['gender'];
  }

  //inserting degree
  if($_POST['email'] == '') {
    echo "Insert email";
  }
  else {
    $email = $_POST['email'];
  }


  //inserting visit 
  if($_POST['phone'] == '') {
    echo "Insert phone";
  }
  else {
    $phone = $_POST['phone'];
  }  

  $data['name'] = $name; 
  $data['age'] = $age; 
  $data['gender'] = $gender; 
  $data['email'] = $email;
  $data['phone'] = $phone;

  $library = new Library();
  $msg = $library->addpatient($data,$imgUrl);
}

?>
    <?php include('includes/menu.php');?>
    <div class="container">
      
      <div class="col-md-12">
        <h2>Enter Doctor Information</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" aria-describedby="emailHelp" placeholder="Enter age" name="age">
          </div>

          <div class="form-group">
            <label for="gender">Select Gender</label>
            <select class="form-control" id="gender" name="gender">
            <option value="">Select Gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            </select>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="Phone" placeholder="Phone Number" name="phone">
          </div>

          <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>
      </div>

    </div>
    <?php include('includes/footer.php');?>
