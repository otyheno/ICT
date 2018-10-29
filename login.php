<!DOCTYPE html>
<html>
<head>
	<title>Log in page</title>
</head>
<body>

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <div class="container">
  	<form class="form-signin" method="POST" action="connection/authen_login.php">
  		<h2 class="form-signin-heading">Please sign in</h2>

  		<label for="inputEmail" class="sr-only">Email address</label><br>

        <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label><br>

        <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">

	        <label>
	            <input type="checkbox" value="remember-me"> Remember me

	        </label>
              <a href="#">Forgot Password</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="login">Sign in</button>
        <br>
        <div class="new-user">
          <label>
            <p>New User? <a href="signup.php">Create an account</a></p>
          </label>
        </div>
  	</form>
  </div>

	
<!--
	<center>

		<form method="POST" action="connection/authen_login.php">

		  <label>Username</label><br>
           <input type="text" name="username"><br><br>

          <label>Password</label><br>
           <input type="password" name="password"><br><br>

           <input type="submit" name="login" value="Log In">
			
		</form>
</center>
-->	

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>