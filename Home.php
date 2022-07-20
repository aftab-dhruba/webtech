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
	
	$cpassword = $npassword = "";

	$cpasswordErrMsg = "";
	$npasswordErrMsg = "";


	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$cpassword = $_POST['cpassword'];
		$npassword = $_POST['npassword'];
		


		if (empty($cpassword) or empty($npassword)){


			echo "Fill up the Form properly";


		}
		else{

			echo "Password Change";



		}



	}

	else {

		echo "Request Rejected";



	}
?>

<form>
	
<fieldset>
			<legend>Log-IN</legend>
			
			<label for="cpassword">Current Password</label>
			<input type="text" name="cpassword" id="cpassword" value="<?php echo $cpassword; ?>">
			<span style="color: red"><?php echo $cpasswordErrMsg; ?></span>


			<br><br>

			<label for="npassword">New Password</label>
			<input type="text" name="npassword" id="npassword" value="<?php echo $npassword; ?>">
			<span style="color: red"><?php echo $npasswordErrMsg; ?></span>

			<br><br>


			<br><br>



		</fieldset>

		<input type="submit" name="submit" value="Confirm">





</form>






</body>
</html>