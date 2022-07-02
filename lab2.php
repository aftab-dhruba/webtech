<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
<body>

	<?php 

	$firstname = $lastname = $gender= "";
	$firstnameErrMsg = "";
	$lastnameErrMsg = "";
$gendernameErrMsg="";
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		$firstname = test_input($_POST['firstname']);
		$lastname = test_input($_POST['lastname']);
		$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
		$email = test_input($_POST['email']);
		$mobileno = test_input($_POST['mobileno']);
		$address1 = test_input($_POST['address1']);
		$country = isset($_POST['country']) ? test_input($_POST['country']) : NULL;

		$message = "";
		if (empty($firstname)) {

			$firstnameErrMsg = "First Name is Empty";
		}
		else {
			if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
			

				$firstnameErrMsg = "Only letters and spaces";
			}
		}

		$message = "";
		if (empty($lastname)) {

			$lastnameErrMsg = "Last Name is Empty";
		}
		else {
			if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
			

				$lastnameErrMsg = "Only letters and spaces";
			}
		}

		$message = "";
		if (empty($gender)) {

			$genderErrMsg = "Gender is Empty";
		}
		
		
		if (empty($email)) {
			$message .= "Email is Empty";
			$message .= "<br>";
		}
		else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message .= "Please correct your email";
				$message .= "<br>";
			}
		}


$message = "";
		if (empty($mobileno)) {

			$mobilenoErrMsg = "mobileno is Empty";
		}
		else {
			if (!preg_match("/^[0-9-' ]*$/",$mobileno)) {
			

				$mobilenoErrMsg = "Only Numbers";
			}
		}



		
		if (empty($address1)) {
			$message .= "Street/House/Road is Empty";
			$message .= "<br>";
		}
		if (!isset($country) or empty($country)) {
			$message .= "Country not Seletect";
			$message .= "<br>";
		}

		if ($message === "") {
			echo "Registration Successful";
		}
		else {
			echo $message;
		}
	}
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>General</legend>

			<label for="fname">First Name</label>
			<input type="text" name="firstname" id="fname" value="<?php echo $firstname; ?>">
			<span style="color: red"><?php echo $firstnameErrMsg; ?></span>

			<br><br>

			<label for="lname">Last Name</label>
			
			<input type="text" name="lastname" id="lname" value="<?php echo $lastname; ?>">
			<span style="color: red"><?php echo $lastnameErrMsg; ?></span>

			<br><br>

			<label>Gender</label>
			<input type="radio" name="gender" id="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female">
			<label for="female">Female</label>
			
			<input type="text" name="gender" id="gender1" value="<?php echo $gender; ?>">
			<span style="color: red"><?php echo $gendernameErrMsg; ?></span>

			<br><br>

			<p id="filename">Group_03_20-42914-1</p>

		</fieldset>

		<fieldset>
			<legend>Contact</legend>

			<label for="email">Email</label>
			<input type="email" name="email" id="email">

			<br><br>

			<label for="mobileno">Mobile No</label>
			<input type="text" name="mobileno" id="mobileno">

			<br><br>

		</fieldset>

		<fieldset>
			<legend>Address</legend>

			<label for="address1">Street/House/Road</label>
			<input type="text" name="address1" id="address1">

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">United States of America</option>
			</select>

			<br><br>

		</fieldset>

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>