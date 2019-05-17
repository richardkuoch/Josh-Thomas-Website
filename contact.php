<?php
session_start();
include_once('top-part.php');?>
	<title>Josh Thomas | Contact</title>
<?php include_once('mid-part.php'); ?>

<main>
	<!--http://token.com.au/sites/default/files/profile-josh-thomas.png-->
	<form action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" name="myForm" id="contact_form" method = "post" target = "_blank">
		<img src="images/profile.png" title="Josh Thomas Profile" alt="Josh Thomas Profile" id="contact_image" height="450" width="250">
		<fieldset>
			<h3 class="heading">Need a Comedian?</h3>
			<p>Fill out the form below to make a booking enquiry.</p>
			<p><span id="asterisk">*</span> denotes required field.</p>
			<p>Flexibility Range:how flexible with changes to selected Event Date</p>
			<label for = "firstName" class="required_field">First Name:</label><input class="required" type = "text" name = "firstName" maxlength = "30" placeholder = "Enter First Name" pattern = "^[a-zA-z\']+[a-zA-z\s.\-\']+$" title = "Example: Lionel" required><br>
			<br>
			<label for ="lastName" class="required_field">Last Name:</label><input type = "text" class="required" name = "lastName" maxlength = "30" placeholder = "Enter Last Name" pattern = "^[a-zA-z\']+[a-zA-z\s.\-\']+$" title= "Example: Messi" required><br>
			<br>
			<label for = "address" class="required_field">Address:</label><input type = "textarea" class="required" name = "address" placeholder = "Enter Home Address" pattern = "^[\w\d\s\-\,\']+$" rows="3" cols="23" required><br>
			<br>
			<label for = "e_address" class="required_field" >Email:</label><input type = "email" name = "e_address" maxlength = "30" placeholder = "Enter Email Address" title="example: barcelona@gmail.com" required><br>
			<br>
			<label for = "phone" class="required_field">Phone Number:</label><input type = "text" name = "phone" placeholder = "Enter Phone Number" pattern = "^\+?\(?\)?[\d\s\(\)\.\-]{6,22}$" title="Example: +614 12345678" required><br>
			<br>
			<label for = "eventDate" class="required_field">Event Date:</label><input type="date" id="date" name="eventDate" min="2016-10-11" required><br>
			<br>
			<label for="flexibleRange">Flexibility Range:</label><span>0 </span><input type="range" min = "0" max = "2" name="flexibleRange" title="0 indicates inflexible 2 indicates super-flexible" required><span> 2</span><br>
			<br>
			<label for = "eventTime" class="required_field">Event Time:</label><input type = "time" name = "eventTime" required><br>
			<br>
			<label for = "location" class="required_field">Event Location:</label><input type = "text" name = "location" maxlength = "20" placeholder = "Enter Location" pattern = "^[A-Za-z0-9\s]+$" title = "Example: Barcelona" required><br>
			<br>
			<label for = "description" class="required_field">Event Description:</label><textarea placeholder="Enter Description" rows="3" cols="23"></textarea><br>
			<br>
			<label for = "performance" class="required_field">Performance Required:</label>
			<select name = "performance">
				<option value = "MC"> MC </option>
				<option value = "comedySpot"> Comedy Spot </option>
				<option value = "fullShow"> Full Show </option>
				<option value = "other"> Other </option> 
			</select><br>
			<br>
			<label></label><input type = "submit" value = "Submit">
		</fieldset>
	</form>
</main>

<?php include_once('end-part.php'); ?>

