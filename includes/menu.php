<?php 
$url = 'http://localhost/Doctor';

 ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Bootstrap Example</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo $url; ?>">Hospital Management</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Doctor
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo $url; ?>/Doctor.php">Add Doctor</a>
        <a class="dropdown-item" href="<?php echo $url; ?>/viewDoctor.php">View Doctor</a>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Patient
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo $url; ?>/addPatient.php">Add Patient</a>
          <a class="dropdown-item" href="<?php echo $url; ?>/viewPatient.php">View Patient</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Appointment
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo $url; ?>/appoinment.php">Add Appointment</a>
          <a class="dropdown-item" href="<?php echo $url; ?>/viewappoinment.php">View Appointment</a>
        </div>
    </li>
    
  </ul>
  
    <ul class="navbar-nav ml-auto">
    <!-- Dropdown -->
	 <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo $url;?>/logout.php">
        Logout
      </a>
    </li>
  </ul>
</nav>