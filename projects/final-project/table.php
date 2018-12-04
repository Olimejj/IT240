<?php
	require_once("functions.php");
	make_header("PERSONAL CHART",array("HOME"=>"index.php", "DEBT-CALCULATOR" => "debt_form.php", "CHART"=>"table.php", ));			
$months = $_POST['months'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$date = $_POST['date'];
$debt = $_POST['debt'];
$interest = $_POST['interest'];
$agree = $_POST['agree'];
$comments = $_POST['comments'];
$rate = $interest*.01/12;
$top = $rate*pow((1+$rate),$months);
$bottom = pow((1+$rate),$months)-1;
$payment = floor($debt * (($rate*pow((1+$rate),$months))/ (pow((1+$rate),$months)-1)))+1;
$msg = "Thank You For Visiting Debt Journey! \n name: $name\n password: $password\n age: $age\n comments: $comments\n";
$msg = wordwrap($msg,70);
mail($email,"debt chart",$msg);//the email would be working if it was setup on the server I think.
file_put_contents("logs.txt", $msg);
?>
 <table id="debt_table">
                        <caption><?php echo"Calculated for \$$debt debt with montly payment of \$$payment and $interest% interest"?></caption>
                        <tr class="table-heading">
                            <th>Months</th>
                            <th>Payment</th>
                            <th>Interest</th>
                            <th>Total Paid</th>
                            <th>Total Interest</th>
                            <th>Remaining Balance</th>
                        </tr>
			<?php $total_paid = 0;$debt_left=$months*$payment;
				$total_interest=0;
			for($x = 1; $x <= $months; $x++){

				$interest_paid = $interest*.01/$months*$debt_left;
				$total_paid+=$payment;
				$debt_left = ($months*$payment)-$total_paid;
				$total_interest += $interest_paid;
                       		echo" <tr class='payment'><td>Month $x</td>
                        	    <td>\$$payment</td>
                	            <td>\$$interest_paid</td>
        	                    <td>\$$total_paid</td>
	                            <td>\$$total_interest</td>
                            	    <td>\$$debt_left</td>
                        	</tr>";
			}
?>
                </table>

<?php make_footer();?>
