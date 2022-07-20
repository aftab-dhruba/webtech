<?php 
	$bgcolor = "";
	
	if (isset($_COOKIE['bgcolor'])) {
		$bgcolor = $_COOKIE['bgcolor'];
	} 
	else {
		$bgcolor = "#e2ebd5";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello PHP</title>
</head>
<body style="background-color: <?php echo $bgcolor ?> ;">

	<h1>Hello PHP</h1>

	<hr><hr>

	<a href="ChangeBackgroundColor.php">Change Color Page</a>

</body>
</html>