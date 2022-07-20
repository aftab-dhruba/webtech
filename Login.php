<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name= "viewport" content="width=device-wide, initial-scale=1.0">
	<title>Log In</title>
</head>
<body>
<?php
	
	$username = $password = "";

	$usernameErrMsg = "";
	$passwordErrMsg = "";


	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$username = $_POST['username'];
		$password = $_POST['password'];
		


		if (empty($username) or empty($password)){


			echo "Fill up the Form properly";


		}
		else{

			echo "Login successful";



		}



	}

	else {

		echo "Request Rejected";



	}
?>

<form>
	
<fieldset>
			<legend>Log-IN</legend>
			
			<label for="username">User Name</label>
			<input type="text" name="username" id="username" value="<?php echo $username; ?>">
			<span style="color: red"><?php echo $usernameErrMsg; ?></span>


			<br><br>

			<label for="password">Password</label>
			<input type="text" name="password" id="password" value="<?php echo $password; ?>">
			<span style="color: red"><?php echo $passwordErrMsg; ?></span>

			<br><br>


			<br><br>



		</fieldset>

		<input type="submit" name="submit" value="Login">





</form>






</body>
</html>