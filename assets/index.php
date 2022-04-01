<?
    require('../config.php');
	if(isset($_POST['fname'])){

		// Multiple recipients
		$to = server_email;

		// Subject
		$subject = 'Staff Application';

		// Message
		$message = "
		Admin,<br>
		<br>
		".$_POST['fname']." ".$_POST['lname'].", with the username ".$_POST['uname']." has submitted a staff application via your website.<br>
		<br>
        <b>First Name:</b> <br>
        ".$_POST['fname']."<br>
        <br>
        <b>Last Name:</b><br>
        ".$_POST['lname']."<br>
        <br>
        <b>Last Name:</b><br>
        ".$_POST['lname']."<br>
        <br>
        <b>Username:</b><br>
        ".$_POST['uname']."<br>
        <br>
        <b>Age:</b><br>
        ".$_POST['Age']."<br>
        <br>
        <b>Discord Username:</b><br>
        ".$_POST['dc']."<br>
        <br>
        <b>Position Applying For:</b><br>
        ".$_POST['position']."<br>
        <br>
        <b>What would you do if a player was spamming in chat:</b><br>
        ".$_POST['q1']."<br>
        <br>
        <b>What would you do if a player was hacking:</b><br>
        ".$_POST['q2']."<br>
        <br>
        <b>Why should we choose you over others:</b><br>
        ".$_POST['q3']."<br>
        <br>
        <b>Elaborate on how you will use your qualities and attributes to advance our server:</b><br>
        ".$_POST['q4']."<br>
        <br>
        <b>What are your greatest qualities and why:</b><br>
        ".$_POST['q5']."<br>
        <br>
        <br>
        
        Their email to reply to is: ".$_POST['email']."<br>
        
		Thanks,<br>
		Ban Appeals
		";



		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		$headers[] = 'To: <'.server_email.'>';
		$headers[] = 'From: Staff';

		// Mail it
		if(mail($to, $subject, $message, implode("\r\n", $headers))){

		  $sent = true;

		}

	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><? echo server_name ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><? echo server_name ?></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="../">Home</a></li>
											<li><a href="../ban">Ban Appeal</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Staff Application</h2>
							<p>Please ensure your answers are detailed!</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
                                <?
                                    if($sent){
                                        
                                        echo "<blockquote> Application has been submitted, please await a response via email! </blockquote>";
                                        
                                    }else{
                                        echo '<form action="" method="POST">

									<label for="fname">First Name: </label>
									<input type="text" name="fname" placeholder="First Name">

									<br />

									<label for="lname">Last Name: </label>
									<input type="text" name="lname" placeholder="Last Name">

									<br />

									<label for="uname">Minecraft Username: </label>
									<input type="text" name="uname" placeholder="Minecraft Username">

									<br />
                                    
                                    <label for="email">Minecraft Username: </label>
									<input type="email" name="email" placeholder="Email">

									<br />

									<label for="age">Age: </label>
									<input type="number" name="age" placeholder="13+">

									<br />

									<label for="dc">Discord Username (Test#5001): </label>
									<input type="text" name="dc" placeholder="Discord Username">

									<br />

									<label for="postion">What position are you applying for: </label>
									<textarea name="position" rows="2">
									</textarea>

									<br />

									<label for="q1">What would you do if a player was spamming in chat: </label>
									<textarea name="q1" rows="4">
									</textarea>

									<br />

									<label for="q2">What would you do if a player was hacking: </label>
									<textarea name="q2" rows="4">
									</textarea>

									<br />

									<label for="q3">Why should we choose you over others: </label>
									<textarea name="q3" rows="4">
									</textarea>

									<br />

									<label for="q4">Elaborate on how you will use your qualities and attributes to advance our server?: </label>
									<textarea name="q4" rows="4">
									</textarea>

									<br />

									<label for="q5">What are your greatest qualities and why?: </label>
									<textarea name="q5" rows="4">
									</textarea>

									<br />

									<input type="Submit">

								</form>';
                                    }
                                ?>
								

							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <? echo server_name ?></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>