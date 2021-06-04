<?php
session_start();
require_once("config.php");
if(!isset($_COOKIE["currentUser"])){
	header("location:admin login.php");
}
?>
<!DOCTYPE html>
<html>

    <head>
	
	    <title>RsRoki-Portfolio</title>
		<link rel="shortcut icon" href="image/top_icon.png">

		<!-- start css -->
		<link rel="stylesheet" href="css/admin panel style.css">
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
                        <li class="nav-item navbtn">
                            <a class="nav-link" href="admin logout core.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
			</div>	
        </nav>
	</header>
	<div class="heading">
		<h1>ADMIN <span>PANEL</span></h1>
    </div>
	<div class="container">
	    <div class="row">
		    <div class="col-md-4">
			<nav class="bdcmb" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=" breadcrumb-item active" aria-current="page"><span class="icon"><i class="fas fa-file-code"></i></span>Repositories</li>
                </ol>
		    </nav>
			
			<div class="btnWrapperMain">
				<div class="btn1"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>
			    <div class="btn2"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>	
			</div>
			
			<div class="btnWrapperMain">
				<div class="btn1"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>
			    <div class="btn2"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>	
			</div>
			
			<div class="btnWrapperMain">
				<div class="btn1"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>
			    <div class="btn2"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>	
			</div>
			
			<div class="btnWrapperMain">
				<div class="btn1"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>
			    <div class="btn2"><a href="#"><button type="button" class="btn btn-primary">Primary</button></a></div>	
			</div>
			
			
			</div>
			<div class="col-md-8">
			    <div class="table-responsive">
					<table id="data" class="table table-hover table-bordered table-striped" style="width:100%">
					    <thead>
						    <tr>
							    <th>Id</th>
							    <th>Name</th>
							    <th>Email</th>
							    <th>Subject</th>
							    <th>Message</th>
							    <th>Sent Time</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$showDataQuery=mysqli_query($connect,"SELECT*FROM my_users");
						while($row = mysqli_fetch_assoc($showDataQuery)){?>
						    <tr>
							    <td><?php echo $row['id']?></td>
							    <td><?php echo $row['name']?></td>
							    <td><?php echo $row['email']?></td>
							    <td><?php echo $row['subject']?></td>
							    <td><?php echo $row['comment']?></td>
							    <td><?php echo $row['signupDate']?></td>
							</tr>
							<?php
							
						}
						?>
						</tbody>
					</table>
		        </div>		
			</div>
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
<html>