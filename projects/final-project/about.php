<?php
	require_once("functions.php");
	make_header("HOME",array("HOME"=>"index.php"));			
?>

<div id="about">
			<div id="right-column">
				<div id="content">
					<figure id="jack-fig">
						<img src="jack.jpg" alt="jack from halloween town" id="jack-pic">
						<figcaption>Jack The Pumpkin King</figcaption>
					</figure>
						<p>Listen to <span id="loud">Jack the Pumpkin King</span></p>
						<p>Boys and girls of every age<br>
							Wouldn't you like to see something strange?<br>
							Come with us and you will see<br>
							This, our town of Halloween<br>
							This is Halloween, this is Halloween<br>
							Pumpkins scream in the dead of night<br>
							This is Halloween, everybody make a scene<br>
							Trick or treat till the neighbors gonna die of fright<br>
							It's our town, everybody scream<br>
							In this town of Halloween</p>
						<audio controls="controls">
							<source src="halloween_song.mp3" type="audio/mpeg">
							<source src="halloween_song.ogg" type="audio/ogg">
							<a href="halloween_song.mp3">Download Audio File</a>
						</audio>
						<br class="clear">
				</div>
</div>



<?php make_footer();?>
