<?php 
	$bgcolor = "";

	if (isset($_COOKIE['bgcolor'])) {
		$bgcolor = $_COOKIE['bgcolor'];
	} 
	else {
		/*$bgcolor = "#FFFFFF";*/
		$bgcolor = "#e2ebd5";
	}
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$bgcolor = $_POST['bgcolor'];
	}

	setcookie("bgcolor", $bgcolor, time() + 10);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Cookie</title>
</head>
<body style="background-color: <?php echo $bgcolor ?> ;">

	<h1>PHP Cookie</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="bgcolor">Please pick a background color:</label>
		<input type="color" name="bgcolor" id="bgcolor">

		<input type="submit" name="submit" value="Change Color">
	</form>

	<hr><hr>

	<a href="Hello.php">Hello Page</a>

</body>
</html>