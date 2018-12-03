<?php
	require_once("functions.php");
	make_header("HOME",array("HOME"=>"index.php"));			
?>
			<figure id="debt-tiper">
				<img src="assets/debt-boulder.png" alt="picture of person pushing boulder representing debt">
				<figcaption>Do You Feel Like This Guy?</figcaption>
			</figure>
			<h2>What Its Like To Look At Your Finances</h2>
			<audio controls="controls">
				<source src="assets/gloom.mp3" type="audio/mpeg">
				<source src="assets/gloom.ogg" type="audio/ogg">
				<a href="assets/gloom.mp3">Download Audio File</a>
			</audio>
			<h2>Video</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7w7ogwv8huc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h2>What Its Like To Pay Off Your Debt!</h2>
			<audio controls="controls">
				<source src="assets/happy.mp3" type="audio/mpeg">
				<source src="assets/happy.ogg" type="audio/ogg">
				<a href="assets/happy.mp3">Download Audio File</a>
			</audio>
			<a href="debt_form.php" class="nav-link">Get Out Of Debt Calculator</a>
<?php make_footer();?>
