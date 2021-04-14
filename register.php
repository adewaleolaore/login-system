<?php
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user = [
			"firstname" => $firstname,
			"lastname" => $lastname,
			"email" => $email,
			"username" => $username,
			"password" => $password
		];

		$user_array[] = $user;

		$user_array = json_encode($user_array, JSON_PRETTY_PRINT);
		file_put_contents('files/usertable.json', $user_array, FILE_APPEND);
		
		//Redirect to login
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrapper">
	<h1>Register</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="registerForm">
		<input type="text" name="firstName" id="firstName" placeholder="Enter your firstname"><br><br>
		<input type="text" name="lastName" id="lastName" placeholder="Enter your lastname"><br><br>
		<input type="email" name="email" id="email" placeholder="Enter your email address"><br><br>
		<input type="text" name="username" id="username" placeholder="Username"><br><br>
		<input type="password" name="password" id="password" placeholder="Enter a password"><br><br>
		<input type="submit" name="submit" value="Register" class="btn"><br>

	</form>
</div>
	
</body>
</html>