<!DOCTYPE html>
<html>

    <head>
	
	    <title>RsRoki-Portfolio</title>
		<link rel="shortcut icon" href="image/top_icon.png">

		<!-- start css -->
		<link rel="stylesheet" href="css/portfolio style.css">
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
		<div class="heading">
		    <h1>MY <span>PORTFOLIO</span></h1>
		</div>
		<div class="animatedSpin">
		<img class="img-fluid" src="image/loading12.gif"/>
		</div>
	</section>
	<section>
	    <div class="container">
		    <div class="row image mb-4">
			    <div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="https://rsroki.info/wp/"><img class="img-fluid" src="image/portfolio 01.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="https://rsroki.info/cafe/"><img class="img-fluid" src="image/portfolio 02.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="https://rsroki.info/"><img class="img-fluid" src="image/portfolio 03.png"/></a></div>
				</div>
			</div>
			<div class="row image mb-4">
			    <div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="http://studentportal.rsroki.info/admin/index.php"><img class="img-fluid" src="image/portfolio 04.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="#"><img class="img-fluid" src="image/portfolio 05.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="#"><img class="img-fluid" src="image/portfolio 06.png"/></a></div>
				</div>
			</div>
			<div class="row image mb-4">
			    <div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="#"><img class="img-fluid" src="image/portfolio 07.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="#"><img class="img-fluid" src="image/portfolio 08.png"/></a></div>
				</div>
				<div class="col-lg-4 col-md-6">
				    <div class="singleImage img-thumbnail"><a href="#"><img class="img-fluid" src="image/portfolio 09.png"/></a></div>
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

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
<html>