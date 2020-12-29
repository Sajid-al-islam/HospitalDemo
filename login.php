<?php
	session_start();
	require_once('class/user.php');
	if(isset($_POST['btn'])){
		//print_r($_POST);
		$user = new User;
		$user->login($_POST);		
	}
	
?>
<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
    <title>Home</title>
  </head>
  <body>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="login-form">
					<form method="post">
						<div class="form-group">
							<label for="email">
								Email
							</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control" placeholder="example@gmil.com" name="email" id="email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="pass">
								Password
							</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-lock"></i></span>
								</div>
								<input type="password" class="form-control" name="pass" id="pass" required>
							</div>
						</div>
						<div class="form-group form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input">Remember Me
							</label>
						</div>
						<button type="submit" class="btn btn-primary" name="btn">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
