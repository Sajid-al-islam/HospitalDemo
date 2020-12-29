<?php 
require_once 'class/library.php';

$name = $degree = $email = $phone = $image = $visit_time = $visit = "";
  
$library = new Library();


 if(isset($_GET['id'])) {
   $id = $_GET['id'];
   $editDoc = $library->getsingledoc($id);
 }

if(isset($_POST['btn'])) {

  //inserting name
  if($_POST['name'] == '') {
    echo "Insert Name";
  }
  else {
    $name = $_POST['name'];
  }

  //inserting degree
  if($_POST['degree'] == '') {
    echo "Insert degree";
  }
  else {
    $degree = $_POST['degree'];
  }

    //inserting degree
  if($_POST['phone'] == '') {
    echo "Insert phone";
  }
  else {
    $phone = $_POST['phone'];
  }

  //inserting degree
  if($_POST['email'] == '') {
    echo "Insert email";
  }
  else {
    $email = $_POST['email'];
  }


  //inserting visit time
  if($_POST['visit_time'] == '') {
    echo "Insert visiting time";
  }
  else {
    $visit_time = $_POST['visit_time'];
  }

  //inserting visit 
  if($_POST['visit'] == '') {
    echo "Insert visit";
  }
  else {
    $visit = $_POST['visit'];
  }  

  $type = array('jpeg','jpg');
    $imageName = $_FILES['image']['name'];
    $imageType = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $imageSize = $_FILES['image']['size'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $directory = "imges/";
    $imgUrl = $directory.$imageName;
    unlink($_POST['image']);
    move_uploaded_file($imageTmp,$imgUrl);

  $data['id'] = $_POST['id'];
  $data['name'] = $name; 
  $data['degree'] = $degree; 
  $data['email'] = $email; 
  $data['phone'] = $phone;
  $data['visit_time'] = $visit_time;
  $data['imgUrl'] = $imageTmp==null?$_POST['image']:$imgUrl; 
  $data['visit'] = $visit; 

  $msg = $library->editDoc($data);
  
}

?>
<?php include('includes/menu.php');?>
    <div class="container">
      
      <div class="col-md-12">
        <h2>Enter Doctor Information</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <?php 
            if(isset($editDoc)) {
              $row = mysqli_fetch_assoc($editDoc);
            }

          ?>
          <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="<?php echo $row['name']; ?>">
          </div>
          <div class="form-group">
            <label for="Degree">Degree</label>
            <input type="text" class="form-control" id="Degree" aria-describedby="emailHelp" placeholder="Enter Degree" name="degree" value="<?php echo $row['degree']; ?>">
          </div>
          <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="Phone" placeholder="Phone Number" name="phone" value="<?php echo $row['phone']; ?>">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email" name="email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label for="Visit">Visit Time</label>
            <input type="text" class="form-control" id="Visit" placeholder="visit Time" name="visit_time" value="<?php echo $row['visit_time']; ?>">
          </div>
          <img src="<?php echo $row['imgUrl']; ?>" class="align-self-start mr-3 img-thumbnail" width="300" height="200">
          <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image" accept="image/*">
                  <label class="custom-file-label" for="customFile">Select Image</label>
                </div>
          </div>

          <div class="form-group">
            <label for="Visit">Visit</label>
            <input type="text" class="form-control" id="Visit" placeholder="Visit" name="visit" value="<?php echo $row['visit']; ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>
      </div>

    </div>
  <?php include('includes/footer.php');?>