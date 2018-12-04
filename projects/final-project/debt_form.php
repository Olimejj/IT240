<?php
 require_once("functions.php");
 make_header("DEBT-FORM",array("HOME"=>"index.php","DEBT-FORM"=>"debt_form.php"));
?>
			<form action="table.php" method="post" id="register-form">
			   <fieldset>
				<legend>Debt Calculator</legend>
				<div class="form-row">
					<label for ="name">User Name:</label>
					<input id="name" type="text" name="name" placeholder="Enter Your User Name">
				</div>
				<div class="form-row">
					<label for="email">Email: </label>
					<input id="email" type="email" name="email">
				</div>
				<div class="form-row">
					<label for="password">Password:</label>
					<input id="password" type="password" name="password">
				</div>
				<div class="radio-row">
					<label>Age Group:<input type="radio" name="age" value="young">0-25 </label>
					<label><input type="radio" name="age" value="middle">26-40</label>
					<label><input type="radio" name="age" value="older">41-102<br></label>
				</div>
				<div class="form-row">
					<label for ="months">Goal #Months To Payoff:</label>
					<input id="months" type="text" name="months">
				</div>
				<div class="form-row">
					<label for ="debt">Current Debt:</label>
					<input id="debt" type="text" name="debt" placeholder="Enter $ amount">
				</div>
				<div class="form-row">
					<label for ="interest">Interest Rate 1%-30%:</label>
					<input id="interest" type="range" name="interest" min="1" max="30" value="0" oninput="amount.value=interest.value">
					<output name="amount" id="amount" for="interest">%</output>
					
				</div>
				<div class="radio-row">
					<label><input type="checkbox" name="agree" checked="checked">Send Me A Copy By Email<br></label>
				</div>
				<div class="textarea-row">
					<label for="comments">Inspiration/Motivation:</label>
					<textarea id="comments" name="comments" rows="7" cols="50">example: When I am debt free I will be able to travel more and visit my family. You Can Do IT!! ect...</textarea>
				</div>
				<div class="submit-row">
					<input type="submit" value="Calculate">
				</div>
			   </fieldset>
			</form>
<?php make_footer();?>	
