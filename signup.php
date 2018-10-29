<!DOCTYPE html>
<html>
<head>
	<title>Registratiion Form</title>
</head>
<body>
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


<div class="container">
      <form class="form-signin" method="POST" action="connection/authen_signup.php">
            <h2 class="form-signin-heading">Create an account to access our services</h2>

            <label for="inputName" class="sr-only">First Name</label><br>
            <input type="text" name="f_name" id="inputName" class="form-control" placeholder="Enter First Name" required autofocus><br>

            <label for="inputName" class="sr-only">Last Name</label>
            <input type="text" name="l_name" id="inputName" class="form-control" placeholder="Enter Last Name" required><br>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Enter Email address" required><br>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Enter Your Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit"  name="signup">Create an account</button><br>

            <label>
              <p>Already registered? <a href="login.php">Login</a></p>
            </label>
      </form>
</div>


	<!--<form  method="POST" action="connection/authen_signup.php">
		
      <label>First Name</label><br>
      <input type="text" name="f_name"><br><br>

       <label>Last Name</label><br>
      <input type="text" name="l_name"><br><br>

       <label>User Name</label><br>
      <input type="text" name="username"><br><br>

       <label>Email</label><br>
      <input type="text" name="email"><br><br>

       <label>Password</label><br>
      <input type="password" name="password"><br><br>

 <input type="submit" name="submit">

	</form>
-->


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>