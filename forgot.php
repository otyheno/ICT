<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password?</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="container">
  	<form class="form-signin" method="POST" action="connection/authen_token.php">
  		<h2 class="form-signin-heading">Reset Your Password</h2>

  		<label for="inputEmail" class="sr-only">Email address</label><br>

        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="login">Reset Password</button>
  	</form>
  </div>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>