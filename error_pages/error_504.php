<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="zM4xi">
		<meta name="keyword" content="minecraft theme, zm4xi">
		<meta name="description" content="WelcomeToMinecraft is a OpenSource Website Theme Template">
		<title>Welcome To Minecraft</title>
		<link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="../css/wtm.css">
	</head>

	<body>
		<!-- navigation bar start -->
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#dashboard">
			  	<img src="../img/logo-light.png" alt="Logo">
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
		<section class="hero bg-overlay" id="dashboard" data-bg="../img/main-bg.png">
		<!-- top background image end -->

		<!-- main text over background image start -->
			<div class="text">
				<p class="lead">Welcome to Minecraft</p>
				<h1>Our servers<span class="bold"> are taking a</span> nap.<span class="bold"> (っ◡.◡)っ</span></h1>
				<br><p class="lead">Error 504 (Gateway Timeout)</p>
				<div class="cta">
					<!-- Change '#features' if you want this button to link something else -->
					<a href="../index.php#dashboard" class="btn btn-primary smooth-link">To the Dashboard</a>
				</div>
			</div>
		<!-- main text over background image end -->
		</section>

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
					<img src="../img/logo-light.png" alt="Logo">
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

		<script src="../js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.easeScroll.js"></script>
		<script src="../sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/wtm.js"></script>
	</body>
</html>
