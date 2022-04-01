<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="zM4xi">
  <meta name="keyword" content="minecraft theme, zm4xi">
  <meta name="description" content="WelcomeToMinecraft is a OpenSource Website Theme Template">
  <title>Welcome To Minecraft | AuthMe Register</title>
  <link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/my-login.css">
</head>
<body class="my-login-page"><br /><br />
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-4">
       <a href="../dashboard.php"><button type="button" name="back-to-page" class="btn btn-primary"><i class="ion-chevron-left"></i>  Back to Homepage</button></a>
      </div>
    </div>
  </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="../img/logo.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">AuthMe Register <small class="text-muted">for Minecraft</small></h4>
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php

                require '../server/authme/functions.php';
                require '../server/authme/AuthMeController.php';
                require '../server/authme/Sha256.php';

                $authme_controller = new Sha256();
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                  $action = $_POST["action"];
                  $user = $_POST["username"];
                  $pass = $_POST["password"];
                  $email = $_POST["email"];

                  $was_successful = false;
                  if ($action && $user && $pass) {
                      if ($action === 'Login') {
                          $was_successful = process_login($user, $pass, $authme_controller);
                      }
                      else if ($action === 'Register') {
                          $was_successful = process_register($user, $pass, $email, $authme_controller);
                      }
                  }
                }

                ?>
								<div class="form-group">
									<label for="username">Name</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<!-- <div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div> -->

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block" name="action" value="Register">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Your Company 2017
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
