<?php
	require_once("functions.php");
	make_header("CHART",array("HOME"=>"index.php", "CHART"=>"table.php"));			
?>
 <table id="debt_table">
                        <caption>Calculated for $15,000 debt with montly payment of $2,600 and 6% interest</caption>
                        <tr class="table-heading">
                            <th>Month</th>
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
                        <tr class='payment'><td>January 2019</td>
                            <td>$2,600</td>
                            <td>$63</td>
                            <td>$5,200</td>
                            <td>$138</td>
                            <td>$9,938</td>
                        </tr>
                        <tr class='payment'><td>Febuary 2019</td>
                            <td>$2,600</td>
                            <td>$50</td>
                            <td>$7,800</td>
                            <td>$188</td>
                            <td>$7,388</td>
                        </tr>
                        <tr class='payment'><td>March 2019</td>
                            <td>$2,600</td>
                            <td>$37</td>
                            <td>$10,400</td>
                            <td>$225</td>
                            <td>$4,824</td>
                        </tr>
                        <tr class='payment'><td>April 2019</td>
                            <td>$2,600</td>
                            <td>$25</td>
                            <td>$13,000</td>
                            <td>$250</td>
                            <td>$2,249</td>
                        </tr>
                        <tr class='payment'><td>May 2019</td>
                            <td>$2,260</td>
                            <td>$12</td>
                            <td>$15,260</td>
                            <td>$260</td>
                            <td>$0</td>
                        </tr>
                </table>

<?php make_footer();?>
