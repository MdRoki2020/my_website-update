<!DOCTYPE html>
<html>

    <head>
	
	    <title>RsRoki-Blog</title>
		<link rel="shortcut icon" href="image/top_icon.png">
		
		<!-- start css -->
		<link rel="stylesheet" href="css/blog style.css">
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
		    <h1>MY <span>BLOG</span></h1>
		</div>
		<div class="animatedSpin">
		<img class="img-fluid" src="image/loading11.gif"/>
		</div>
	</section>
	<section>
	    <div class="container">
		    <div class="row mb-4">
			    <div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog1.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">How to Own Your Audience by Creating an Email List</a></h4>
						    <p class="card-text">This is the best form of communicating with your customers. Even though social media gets a lot of attention,</p>
					    </div>
				    </div>
				</div>
				<div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog2.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">Top 10 Toolkits for Deep Learning in 2020</a></h4>
						    <p class="card-text">Vs Code, PyTorch, Keras, Caffe are some of the popular tools which are being widely used to carry out Deep Learning algorithms.</p>
					    </div>
				    </div>
				</div>
				<div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog3.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">Everything You Need to Know About Web Accessibility</a></h4>
						    <p class="card-text">According to this guideline, web content should be perceivable, operable, understandable, robust, and conforming.</p>
					    </div>
				    </div>
				</div>
			</div>
			<div class="row mb-4">
			    <div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog4.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">How to Inject Humor & Comedy Into Your Brand</a></h4>
						    <p class="card-text">While I’ve always known that injecting humor into situations makes the mood lighter, I have hard data showing that comedy sells products.</p>
					    </div>
				    </div>
				</div>
				<div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog5.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">Men in Web Development: How To Achieve Success</a></h4>
						    <p class="card-text">Choose a Development Specialization. Each element of a website is linked to something else, and it's a complex job to build a website successfully. ...</p>
					    </div>
				    </div>
				</div>
				<div class="col-lg-4 d-lg-flex">
				    <div class="card bg-dark singleCard">
					<a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="image/blog6.jpg"/></a>
						<div class="card-body">
							<h4><a href="#">Evergreen versus topical content: An overview</a></h4>
						    <p class="card-text">Content will either be topical or evergreen. You should always include both categories in your marketing strategy, as each has its ideal purpose.</p>
					    </div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<section>
	    <div class="container">
		    <div class="paginationBox">
			    <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item open"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
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