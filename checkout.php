<?php session_start();?>
<?php include_once('top-part.php'); ?>
	<title>Checkout Page</title>
<?php
	$prices = array('s1' => 17.00,'s2' => 22.50,'s3' => 26.75);

	$total=0;
?>
	<script type="text/javascript">
		//validate card expiry
		function cardExpiry()
		{
		    var exMonth=document.getElementById("exMonth").value;
		    var exYear=document.getElementById("exYear").value;
		    // current month is october
		    var month = 10;
		    // current year is 2016
		    var year = 2016;
		    
		    // check to see that month and year are both in the past. print error message.
		    if(exMonth<month && exYear<=year){
		    
		    alert("Please enter a valid expiration date");
		    return false;

		    }

		}		
		//validate credit card expiry
		function validateForm(){
			var today; 
			var someday;
			var exMonth=document.getElementById("exMonth");
			var exYear=document.getElementById("exYear");
			today = new Date();
			someday = new Date();
			someday.setFullYear(exYear, exMonth, 1);
			if (someday < today){
			alert("The expiry date is before today's date. Please select a valid expiry date");
		    return false;

			}
		}

		//Remember Me
		function save(){
			//first name
			var firstName = document.getElementById('firstName').value;
			localStorage.setItem('fName', firstName);
			//last name
			var lastName = document.getElementById('lastName').value;
			localStorage.setItem('lName', lastName);
			//address
			var address = document.getElementById('address').value;
			localStorage.setItem('adr', address);
			//email
			var e_address = document.getElementById('e_address').value;
			localStorage.setItem('e_adr', e_address);
			//phone
			var phone = document.getElementById('phone').value;
			localStorage.setItem('ph', phone);

		}
		// Prefill Form
		function load(){

			//first name
			var storedFirstName = localStorage.getItem('fName');
			if(storedFirstName){
				document.getElementById('firstName').value = storedFirstName;
			}
			//last name
			var storedLastName = localStorage.getItem('lName');
			if(storedLastName){
				document.getElementById('lastName').value = storedLastName;
			}
			//address
			var storedAddress = localStorage.getItem('adr');
			if(storedAddress){
				document.getElementById('address').value = storedAddress;
			}
			//email
			var storedEAddress = localStorage.getItem('e_adr');
			if(storedEAddress){
				document.getElementById('e_address').value = storedEAddress;
			}
			//phone
			var storedPhone = localStorage.getItem('ph');
			if(storedPhone){
				document.getElementById('phone').value = storedPhone;
			}
		}
		//Remove Data Input
		function remove(){
			//remove first name data
			document.getElementById('firstName').value = '';
			localStorage.removeItem('fName');
			//remove last name data
			document.getElementById('lastName').value = '';
			localStorage.removeItem('lName');
			//remove address data
			document.getElementById('address').value = '';
			localStorage.removeItem('adr');
			//remove email address data
			document.getElementById('e_address').value = '';
			localStorage.removeItem('e_adr');
			//remove phone data
			document.getElementById('phone').value = '';
			localStorage.removeItem('ph');
			// clear storage
			localStorage.clear();
		}

	</script>
<?php include_once('mid-part.php'); ?>
<main>
	<form action = "confirm.php" name="confirm" method = "post" target = "_blank">
		<fieldset>
			<h3 class="heading">Checkout Form</h3>
			<p><span id="asterisk">*</span> denotes required field.</p>
			<label for = "firstName" class="required_field">First Name:</label><input class="required" type = "text" name = "firstName" id="firstName" maxlength = "30" placeholder = "Enter First Name" pattern = "^[a-zA-z\']+[a-zA-z\s.\-\']+$" title = "Example: Lionel" required><br>
			<br>
			<label for ="lastName" class="required_field">Last Name:</label><input type = "text" class="required" name = "lastName" id = "lastName" maxlength = "30" placeholder = "Enter Last Name" pattern = "^[a-zA-z\']+[a-zA-z\s.\-\']+$" title= "Example: Messi" required><br>
			<br>
			<label for = "address" class="required_field">Address:</label><textarea placeholder="Enter Address" id="address" name="address" rows="2" cols="23" pattern = "^[\w\s\-\,\']{1,}$" ></textarea><br>
			<br>
			<label for = "e_address" class="required_field" >Email:</label><input type = "email" name = "e_address" id = "e_address" name="e_address" maxlength = "30" placeholder = "Enter Email Address" title="example: barcelona@gmail.com" required><br>
			<br>
			<label for = "phone" class="required_field">Phone Number:</label><input type = "text" name = "phone" id = "phone" name="phone" placeholder = "Enter Phone Number" pattern = "^\+?\(?\)?[\d\s\(\)\.\-]{6,22}$" title="Example: +614 12345678" required><br>
			<br>
			<label for= "card" class="required_field">Credit Card:</label><input type = "text" id="card" name = "card" pattern = "^[0-9\s?\-\/]{13,18}$"  title="Must be between 13 to 18 characters including special characters" required><br>
			<br>
			<label for = "cardExpiry" class="required_field">Card Expiration:</label>
			<select name = "exMonth" id="exMonth" onchange="cardExpiry()">
				<option value = "01">January</option>
				<option value = "02">February</option>
				<option value = "03">March</option>
				<option value = "04">April</option>
				<option value = "05">May</option>
				<option value = "06">June</option>
				<option value = "07">July</option>
				<option value = "08">August</option>
				<option value = "09">September</option>
				<option value = "10">October</option>
				<option value = "11">November</option>
				<option value = "12">December</option>
			</select>
			<select name = "exYear" id="exYear">
				<option value = "16">2016</option>
				<option value = "17">2017</option>
				<option value = "18">2018</option>
				<option value = "19">2019</option>
				<option value = "20">2020</option>
			</select>
			<br>
			<br>
			<label for = "deliveryMethod" class="required_field">Delivery Method:</label>
			<select name = "deliveryMethod">
				<option value = "0">Regular Delivery price: free</option>
				<option value = "7">Regular Courier price: $7.00</option>
				<option value = "10.50">Express Courier price: $10.50</option>
			</select>
			<br>
			<br>
			<label></label><input type="button" value="Remember Me" onclick="save()"/><br>
			<br>
			<label></label><input type="button" value="Forget Me" onclick="remove()"/><br>
			<br>
			<label></label><input type = "submit" value = "Submit">
		</fieldset>
	</form>

</main>
<?php include_once('end-part.php'); ?>