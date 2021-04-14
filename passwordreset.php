<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password Reset</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">          
                <input type="password" name="new_password" value="<?php echo $new_password; ?>" placeholder="New Password"><br><br>
                <input type="password" name="confirm_password" placeholder="Confirm New Password"><br><br>
                <input type="submit" value="Submit" class="btn"> | <a href="index.php">Cancel</a>
        </form>
    </div>    
</body>
</html>