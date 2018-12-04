<?php 

function make_header($current_link, $crumbs){?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<link rel="stylesheet" type="text/css" href="debt_style.css">
			<title>Debt Journey | <?php echo $current_link ?></title>
			<meta charset="utf-8">
		</head>
		<body>
			<?php $crum_num=0;
			foreach($crumbs as $key => $value){
				if($crum_num >=1){echo '<a>&#8592;</a>';}
				crumbs_generator($key, $value);
				$crum_num++;
			}		
			?> <header> <h1><?php echo $current_link ?></h1></header>
			<?php nav_bar($current_link);?>
			<div class='wrapper'>
<?php 
}
function make_footer(){
	?>
	</div>
		<footer>
			<p>&copy; olimejj-creations</p>
			<p id="email">olimejj@gmail.com</p>
		</footer>
	</body>
	</html>
<?php
}
function nav_bar($current_link){
	echo '<nav><ul>';

		nav_link("HOME", "index.php", $current_link);
		nav_link("DEBT-CALCULATOR", "debt_form.php", $current_link);
		nav_link("ABOUT US", "about.php", $current_link);
		nav_link("PERSONAL DEBT JOURNEY", "start_journey.php", $current_link);
		nav_link("STATISTICS", "statistics.php", $current_link);
	echo '</ul></nav>';
}
function nav_link($name, $url, $current_link) {
  if ($name == $current_link) { ?>
     <li> <a href="<?php print $url ?>" class="on"><?php print $name ?></a></li>
  <?php }else{?>
  <a href="<?php print $url ?>"><?php print $name ?></a><?php
  }
}
function crumbs_generator($name, $url){
	echo "<a href=\"$url\">$name</a>";
}
function session_setup(){
	
}
?>
