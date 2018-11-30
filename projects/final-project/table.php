<?php
	require_once("functions.php");
	make_header("PERSONAL CHART",array("HOME"=>"index.php", "CHART"=>"table.php"));			
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
 <table id="debt_table">
                        <caption>Calculated for $15,000 debt with montly payment of $2,600 and 6% interest</caption>
                        <tr class="table-heading">
                            <th><?php echo $frequency?></th>
                            <th>Payment</th>
                            <th>Interest</th>
                            <th>Total Paid</th>
                            <th>Total Interest</th>
                            <th>Remaining Balance</th>
                        </tr>
                        <tr class='payment'><td>December 2018</td>
                            <td>$2,600</td>
                            <td>$75</td>
                            <td>$2,600</td>
                            <td>$75</td>
                            <td>$12,475</td>
                        </tr>
                </table>

<?php make_footer();?>
