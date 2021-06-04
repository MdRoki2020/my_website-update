<!DOCTYPE html>
<html>
    <head>
	    <title>RsRoki-Home</title>
		<link rel="shortcut icon" href="image/top_icon.png">
		
		<!-- start css -->
		<link rel="stylesheet" href="css/index style.css">
		<!-- end css -->
		
		<?php
		require_once("include/links.php");
		?>
		
	</head>
	<body>
	
	<header id=topbar>
	    <nav class="navbar navbar-expand-lg navbarMain">
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
	<section>
		<div class="animatedSpin">
		<img class="img-fluid" src="image/loading14.gif"/>
		</div>
	</section>
	<section>
	<div class="container">
	    <div class="row">
	        <div class="col-lg-4">
		        <div class="imgBoxWrapper">
				    <div class="imageBox">
				        <img class="img-fluid img-responsive width: auto" src="image/RokiHomePhoto.jpg"/>
				    </div>
				</div>
		    </div>
		    <div class="col-lg-6">
			    <div class="discriptionBox">
			        <h4>HI THERE !</h4>
				    <h1>I'M <span>ROKI</span></h1>
				    <p>I'm a Full Stack Web Developer mainly & I have good experience on Graphics Design too. I have been working as a Web Developer over the last 1 years.I am very much confident of our Succession together as I am punctual and creative.</p>

					<a class="btn_hyper" href="about.php"><button class="moreAboutBtn btn-primary">MORE ABOUT ME</buttton></a>
			    </div>
		    </div>
			<div class="col-lg-2">
			    
		    </div>
	    </div>
	</div>
	</section>
	<section class="directUp">
	<div class="directUpIcon ml-auto">
	    <a href="#topbar"><i class="fas fa-angle-double-up"></i></a>
	</div>
	</section>

	<footer class="footerBar">
	    <div class="container">
		    <div class="ml-auto footerInfo">
		        <i>&copy;copyright rsroki <?php echo date("Y");?></i>
		    </div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
<html>