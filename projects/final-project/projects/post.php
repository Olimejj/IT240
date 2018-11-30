<?php
        require_once("functions.php");
        make_header("FORM INFO",array("HOME"=>"index.php", "FORM INFO"=>"post.php"));
$frequency = $_POST['frequency'];
$name = $POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$date = $_POST['date'];
$debt = $_POST['debt'];
$interest = $_POST['interest'];
$agree = $_POST['agree'];
$comments = $_POST['comments'];
echo "$name <br> $email<br> $age<br> $date<br> $debt<br> $interest<br> $agree<br> $comments<br>";
?>




<?php make_footer();?> 
