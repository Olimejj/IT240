<?php
	require_once("functions.php");
	make_header("HOME",array("HOME"=>"index.php"));			
?>
			<figure id="debt-tiper">
				<img src="debt-boulder.png" alt="picture of person pushing boulder representing debt">
				<figcaption>Do You Feel Like This Guy?</figcaption>
			</figure>
			<h2>What Its Like To Look At Your Finances</h2>
			<audio controls="controls">
				<source src="gloom.mp3" type="audio/mpeg">
				<source src="gloom.ogg" type="audio/ogg">
				<a href="gloom.mp3">Download Audio File</a>
			</audio>
			<h2>Video</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7w7ogwv8huc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h2>What Its Like To Pay Off Your Debt!</h2>
			<audio controls="controls">
				<source src="happy.mp3" type="audio/mpeg">
				<source src="happy.ogg" type="audio/ogg">
				<a href="happy.mp3">Download Audio File</a>
			</audio>
			<a href="debt_form.php" class="nav-link">Get Out Of Debt Calculator</a>
<?php make_footer();?>
