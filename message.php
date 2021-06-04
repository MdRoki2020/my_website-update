<!DOCTYPE html>
<html>

    <head>
	
	    <title>RsRoki-Message</title>
		<link rel="shortcut icon" href="image/top_icon.png">
		
		<!-- start css -->
		<link rel="stylesheet" href="css/message style.css">
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
		    <h1>GET IN <span>TOUCH</span></h1>
		</div>
		<div class="animatedSpin">
		<img class="img-fluid" src="image/loading14.gif"/>
		</div>
	</section>
	<section>
	    <div class="container">
		    <div class="row">
			    <div class="col-lg-4 contract1">
				    <h4>DON'T BE SHY !</h4>
				    <p>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
				    <div class="mail"><i class="fas fa-envelope"></i> <span>MAIL ME</span> <p>mroki815@gmail.com</p></div>
				    <div class="phone"><i class="fab fa-skype"></i> <span>SKYPE</span> <p>Roki</p></div>
				    <div class="socialNetWorkWrapper mb-5">
				    	<a class="socialNet facebook" href="https://web.facebook.com/profile.php?id=100011096582248"><i class="fab fa-facebook"></i><a>
				        <a class="socialNet instagram" href="https://www.instagram.com/roki.rs/?hl=en"><i class="fab fa-instagram-square"></i></a>
				        <a class="socialNet twiter" href="https://twitter.com/RsRoki6"><i class="fab fa-twitter"></i></a>
				        <a class="socialNet youtube" href="https://www.youtube.com/channel/UCofBVniuYkCv8_lYiV-craA"><i class="fab fa-youtube"></i><a/>
				        <a class="socialNet github" href="https://github.com/MdRoki2020?fbclid=IwAR0Wby6l5sUChHIsT_Q951gGPRHGaECJocN4kZVB0oxiCGb6v-t7bDPupBc"><i class="fab fa-github"></i></a>
				    </div>
				</div>
				<div class="col-lg-8">
				    <div class="row">
					    <div class="col-lg-6 assignment ">
						    <h4 class="text-center textAssignment">Attached File !</h4>
							
							<?php
	                        if(isset ($_FILES['image'])){
			                $filename=$_FILES['image']['name'];
			                $filetmp=$_FILES['image']['tmp_name'];
			                move_uploaded_file($filetmp,"user_image/".$filename); 
			                echo "<font color='#1ec8cb'>File Uploaded Successfully !</font>";
		                    }
	                        ?>
							
							<form method="post" action="message.php" enctype="multipart/form-data">
	                        <input class="fileBox" type="file" name="image" required/>
		                    <input class="fileSubmitBtn" type="submit" value="submit"/>
	                        </form>
							<p class="chakeBoxText"><input type="checkbox" class="chakeBox"> You must include your name and email address in the pdf or others file !!</p>
							
						</div>
						<div class="col-lg-6">
						    <div class="text-center">
							<h4 class="textComment">Message !</h4>
                                <?php
								if(isset($_REQUEST["right"])){
									echo "<font color='#1ec8cb'>Your Comment Successfully Submitted !!</font>";
								}
							    ?>  								
							    <form method="post" action="message core.php">
							        <input class="inputBox inputName" type="text" name="name" placeholder="Enter Your Name" required/>
							        <input class="inputBox inputEame" type="email" name="email" placeholder="Enter Your Email" required/>
							        <input class="inputBox inputSubject" type="text" name="subject" placeholder="Enter Your Subject" required/>
								    <textarea class="text-center message form-control" name="comment" placeholder="Enter Your Message" rows="3" required></textarea>
								    <input class="submitBtn" type="submit" value="Message Sent"/>
							    </form>
								<br/>
								<br/>
							</div>
						</div>
					</div>					
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