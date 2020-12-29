<?php 
	$baseUrl = 'http://localhost/nhipp_dv_64/class-27'; 
?>
<!DOCTYPE html>
<html>
     <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	       
	       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		   <link rel="stylesheet" href="css/bootstrap.min.css">
		   <link rel="stylesheet" type="text/css" href="icon/css/fontawesome.css"/>
		   <link rel="stylesheet" type="text/css" href="icon/css/brands.css"/>
		   <link rel="stylesheet" type="text/css" href="icon/css/solid.css"/>
		   <link rel="stylesheet" href="css/owl.carousel.min.css">
           <link rel="stylesheet" href="css/owl.theme.default.min.css">
		   <link rel="stylesheet" type="text/css" href="css/style.css">
		   <title>blog.com</title>
	 </head>
	 <body>
	       <section class="menubar">
			   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				  <div class="container">
					  <a class="navbar-brand" href="<?php echo $baseUrl; ?>"><b>News Portal</b></a>
					  <ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link" href="<?php echo $baseUrl; ?>">Home</a>
						</li>
					  <?php
						$data = $library->getCat();
						while($menu = mysqli_fetch_assoc($data)) {
					  ?>
						<li class="nav-item">
						  <a class="nav-link" href="categoryByNews.php?id=<?php echo $menu['id']; ?>"><?php echo $menu['cat_name']; ?></a>
						</li>
						<?php
						}	
						?>
					    <?php if(isset($_SESSION['email'])){ ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?php echo $_SESSION['email']; ?>
							</a>
                      <div class="dropdown-menu">
                         <a class="nav-link text-success" href="<?php echo $baseUrl;?>/logout.php">
                        Logout
                      </a>
                			 </li>
						<?php } else {  ?>

						<li class="nav-item">
						  <a class="nav-link" href="signUp.php">SignUp</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="login.php">Login</a>
						</li>
                   
            
						<?php } ?>
					  </ul>
				  </div>
			   </nav>
		   </section>