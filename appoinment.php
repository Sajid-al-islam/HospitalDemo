<?php 
require_once 'class/library.php';
  $library = new Library();
  if(isset($_POST['btn'])){
    $appt = $library->saveAppt($_POST);
  
  }

?>
    <?php include('includes/menu.php');?>
    <div class="container">
      
      <div class="col-md-12">
        <h2>Make an Appointment</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <div class="form-group">
							      <label for="name"><b>Paitent Name</b></label>
								  <input type="text" id="name" class="form-control" name="p_name" placeholder="Type Doctor name">
							 </div>
							 <div class="form-group">
							      <label for="degree"><b>Doctore Name</b></label>
								  <input type="text" id="degree" class="form-control" name="d_name" placeholder="Type Degree">
							 </div>
							 <div class="form-group">
							      <label for="phone"><b>Age</b></label>
								  <input type="text" id="phone" class="form-control" name="age" placeholder="Type Doctor's Phone number">
							 </div>
							 <div class="form-group">
							      <label for="email"><b>Phone</b></label>
								  <input type="text" id="email" class="form-control" name="phone" placeholder="Type Doctor's Email">
							 </div>
							 <div class="form-group">
							      <label for="visit-time"><b>Date</b></label>
								  <input type="date" id="visit-time" class="form-control" name="date">
							 </div>
							<input type="submit" class="btn btn-primary btn-block" value="Get An Appointment" name="btn">
        </form>
      </div>

    </div>
    <?php include('includes/footer.php');?>
