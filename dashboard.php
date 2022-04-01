<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="zM4xi">
		<meta name="keyword" content="minecraft theme, zm4xi">
		<meta name="description" content="WelcomeToMinecraft is a OpenSource Website Theme Template">
		<title>Welcome To Minecraft</title>
		<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="css/wtm.css">

	</head>
	<body>
		<!-- navigation bar start -->
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#dashboard">
			  	<img src="img/logo-light.png" alt="Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
							<!-- change '#dashboard' if you have a seperate dashboard page -->
			        <a class="nav-link smooth-link" href="#dashboard">Dashboard</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#features' if you have a seperate features page -->
			        <a class="nav-link smooth-link" href="#features">Our Server</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#games' if you have a seperate games page -->
			        <a class="nav-link smooth-link" href="#games">Our Games</a>
			      </li>
			      <li class="nav-item">
							<!-- change '#project' if you have a seperate project page -->
			        <a class="nav-link smooth-link" href="#project">New Map</a>
			      </li>
						<li class="nav-item">
							<a class="nav-link smooth-link" href="authme/login.php">AuthMe Login</a>
						</li>
			    </ul>
			    <form class="form-inline">
						<!-- change '#contact' if you have a seperate contact page -->
				    <a href="#contact" class="btn smooth-link align-middle btn-primary">Contact Us?</a>
			    </form>
			  </div>
		  </div>
		</nav>
		<!-- navigation bar end -->

		<!-- top background image start -->
		<section class="hero bg-overlay" id="dashboard" data-bg="img/main-bg.png">
		<!-- top background image end -->

		<!-- main text over background image start -->
			<div class="text">
				<p class="lead">Welcome To Minecraft</p>
				<h1>We love<span class="bold"> Minecraft</span> and our<span class="bold"> Community</span>.</h1><br />
				<!-- onlineplayers display start -->
				<?php
					require ('server/mojangAPI/mojang-api.class.php');
					$mojangAPIQuery = MojangAPI::query('play.onecraft.fr', 25565);
					if($mojangAPIQuery) {
						$playersMax    = $mojangAPIQuery["maxplayers"];
						$playersOnline = $mojangAPIQuery["players"];
						$ping          = MojangAPI::ping("play.onecraft.fr", 25565);
						#For more examples look at /server/mojangAPIQuery/example.php
                        #Keep in mind for most of this API's features u need to activate the query in the server.properties

						echo '<p class="lead">Online: ' . $playersOnline . ' of ' . $playersMax . '</p> <br />';
						echo '<img src="' . MojangAPI::embedImage($ping['favicon']) . '" alt="Favicon of server">';
					} else {
					    echo '<p> Server seems to be offline :[</p>';
                    }
				?>
				<!-- onlineplayers display end -->
				<div class="cta">
					<!-- Change '#features' if you want this button to link something else -->
					<a href="#features" class="btn btn-primary smooth-link">That's us</a>
				</div>
			</div>
		<!-- main text over background image end -->
		</section>

		<section class="padding" id="features">
			<div class="container">
				<!-- Copy&Paste from HERE to (1)-->
				<div class="row">
					<!-- Copy&Paste from HERE to (2)-->
					<div class="col-12 col-md-4 col-sm-12">
						<div class="list-item">
							<div class="icon">
								<i class="ion-android-calendar"></i>
							</div>
							<div class="desc">
								<h2>We're here since 3 years</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore.
								</p>
								<a href="about-us.php" class="more">Learn More</a>
							</div>
						</div>
					</div>
					<!-- HERE to create a new column in #features (2)-->
					<div class="col-12 col-md-4 col-sm-12">
						<div class="list-item">
							<div class="icon">
								<i class="ion-person"></i>
							</div>
							<div class="desc">
								<h2>Our Team</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore.
								</p>
								<a href="our-team.php" class="more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-sm-12">
						<div class="list-item no-spacing">
							<div class="icon">
								<i class="ion-connection-bars"></i>
							</div>
							<div class="desc">
								<h2>Our Server Specs</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore.
								</p>
								<a href="specs.php" class="more">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<!-- HERE to create a new row for new columns (1)-->
			</div>
		</section>

		<section class="padding bg-grey" id="games">
			<!-- Copy&Paste from HERE to (1) -->
			<div class="container">
				<h2 class="section-title">Our Games</h2>
				<p class="section-lead text-muted">Here you can see a small overview of all the awesome games we can provide to you and your friends.</p>
				<div class="section-body">
					<!-- Copy&Paste from HERE to (2) -->
					<div class="row col-spacing">
						<!-- Copy&Paste from HERE to (3) -->
						<div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="img/games/bedwars.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted">by zM4xi</div>
							    <h4 class="card-title"><a href="example-game.php">BedWars</a></h4>
							    <p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
							    <div class="text-right">
								    <a href="example-game.php" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
					  </div>
						<!-- HERE to create a new preview card (3) -->
					  <div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="img/games/skywars.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted">by zM4xi</div>
							    <h4 class="card-title"><a href="example-game.php">SkyWars</a></h4>
							    <p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
							    <div class="text-right">
								    <a href="example-game.php" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="card">
							  <img class="card-img-top" src="img/games/jumpnrun.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted">by zM4xi</div>
							    <h4 class="card-title"><a href="example-game.php">Jump'n Runs</a></h4>
							    <p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
							    <div class="text-right">
								    <a href="example-game.php" class="card-more">Read More <i class="ion-ios-arrow-right"></i></a>
							    </div>
						    </div>
						  </article>
					  </div>
					</div>
					<!-- HERE to create a new row (2) -->
				</div>

				<!-- email subscriptions start -->
				<div class="row align-items-center mt-5">
					<div class="col-12 col-md-6">
						<h2>Don't miss new games</h2>
						<p class="text-muted">Just enter your email then we will send an email about the new games</p>
					</div>
					<div class="col-12 col-md-6">
						<form class="subscribe" action="#">
							<input type="email" name="email" class="form-control" placeholder="Your email">
							<button class="btn btn-primary">Subscribe</button>
						</form>
					</div>
				</div>
				<!-- email subscriptions start -->
			</div>
			<!-- HERE will create a new area to add things (1) -->
		</section>

		<!-- project preview start -->
		<section class="bg-overlay padding" id="project" data-bg="img/thelake.png">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<div class="projects-details">
							<div class="projects-badge">
								BRAND NEW
							</div>
							<h2 class="projects-title">TheLake - New SurvivalGames Map</h2>
							<p class="projects-description">
								You can see a little sneak peak in the background so you can guess how sick this map is gonna look. When it'll be released.<br /><br /><br /><br /><br /><br />
							</p>
							<a href="https://www.youtube.com/results?search_query=survivalgames+map+download" class="more"> >> See the intro video here </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- project preview end -->

		<!-- contact form start -->
		<section class="padding bg-grey" id="contact">
			<div class="container">
				<h2 class="section-title text-center">Contact Us</h2>
				<p class="section-lead text-center text-muted">Send us your ideas, wisches and more. We will answer as soon as possible</p>
				<div class="section-body">
					<div class="row col-spacing">
						<div class="col-12 col-md-5">
							<p class="contact-text">You can call us between 12:00 and 19:00</p>
							<ul class="contact-icon">
								<li><i class="ion ion-ios-telephone"></i> <div>Skype: myserver.com_SKYPE</div></li>
								<li><i class="ion ion-ios-email"></i> <div>ideas@myserver.com</div></li>
							</ul>
						</div>
						<div class="col-12 col-md-7">
							<form class="contact row" id="contact-form">
								<div class="form-group col-6">
									<input type="text" class="form-control" placeholder="Name" name="name" required="">
								</div>
								<div class="form-group col-6">
									<input type="email" class="form-control" placeholder="Email" name="email" required="">
								</div>
								<div class="form-group col-12">
									<input type="text" class="form-control" placeholder="Subject" name="subject" required="">
								</div>
								<div class="form-group col-12">
									<textarea class="form-control" placeholder="Message" name="message" required=""></textarea>
								</div>
								<div class="form-group col-12 mt-2">
									<button class="btn btn-primary">
										Send Message
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- contact form end -->

		<!-- footer start -->
		<footer>
			<div class="container">
				<figure>
					<img src="img/logo-light.png" alt="Logo">
				</figure>
				<p>
					Copyright &copy; 2017 Your Company
				</p>
				<p>
					Made with <i class="ion-heart"></i> By zM4xi
				</p>
			</div>
		</footer>
		<!-- footer end -->
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.easeScroll.js"></script>
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<script src="js/wtm.js"></script>
	</body>
</html>
