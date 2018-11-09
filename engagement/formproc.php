<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Member Results</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Welcome!</h1>
		<div id="main-content">
			Name: <?php print $_POST['name']?><br>
			Email: <?php print $_POST['email']?><br>
			Password: <?php print $_POST['password']?><br>
			Gender: <?php print $_POST['gender']?><br>
			Agree: <?php print $_POST['agree']?><br>
			State: <?php print $_POST['state']?><br>
			Comments: <?php print $_POST['comments']?><br>
			<?php
			$message = "name: ".$_POST['name']."\n";
			$message .= "Email: ".$_POST['email']."\n";
			mail($_POST['email'], "Welcome!",$message,"from: olijj@is3.byuh.edu");
			?>
		</div>
	</body>
</html>

