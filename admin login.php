<!doctype html>
<html lang="en">
  <head>
  
    <!-- start css -->
	<link rel="stylesheet" href="css/admin login style.css">
	<!-- end css -->
	<link rel="shortcut icon" href="image/top_icon.png">
    <title>Rs Roki-Admin</title>
	
	<?php
	require_once("include/links.php");
	?>
				
  </head>
  <body>
    <header id="topbar">
	<nav class="navbar navbar-expand-lg navbarMain ">
            <div class="container">
			    <a class="navbar-brand" href="index.php"><img class="img-fluid" src="image/navbarLogo.png"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="colBtn fas fa-bars navbarIcon"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="about.php"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="portfolio.php"><i class="fas fa-briefcase"></i></a>
                        </li>
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="message.php"><i class="fas fa-comments"></i></a>
                        </li>
				        <li class="nav-item navbtn">
                            <a class="nav-link" href="blog.php"><i class="fas fa-rss-square"></i></a>
                        </li>
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="admin panel.php"><i class="fas fa-user-lock"></i></a>
                        </li>
                    </ul>
                </div>
			</div>
        </nav>
	</header>
    
	<div class="heading text-center">
		<h1>ADMIN <span>LOGIN</span></h1>
	</div>
	<div class="container">
        <div class="row">
			<div class="col-md-3"></div>
			        <div class="col-md-6 loginBox">
                        <form action="admin login core.php" method="post">
                           <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" name="password" placeholder="Please Enter Password" required>
                            </div>
                            <button type="submit" class="loginBtn">Login</button>
                        </form>
						<div class="pop_up_notification">
					        <?php
			
					        if(isset($_REQUEST["wrong"])){
						    echo 'Wrong Email Or Password';
					        }
			                ?>
					   </div>
                    </div>
            <div class="col-md-3"></div>
        </div>           
    </div>

    <footer class="footerBar">
        <div class="container">
            <div class="ml-auto footerInfo">
                <i>&copy;copyright rsroki <?php echo date("Y");?></i>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>