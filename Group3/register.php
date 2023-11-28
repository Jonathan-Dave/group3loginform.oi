

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<center>
		<form class="regform">
			<h2>Register</h2>
			<hr>
				<div class="fields lname">
					<label for="username">Last name</label>
					<input type="name" name="name" placeholder="" required>
				</div>
				<div class="fields fname">
					<label  for="username">First name</label>
					<input  type="name" name="name" placeholder="" required>
				</div>
			
				<div class="fields bday">
					<label  class="lab yug">Select your birthdate:</label>
					<input class="lab hag" type="date" id="birthdate" name="birthdate" oninput="calculateAge()" placeholder="" required>
					<div  class="lab ni"id="result">Age:</div>
				</div>
				<div class="fields address">
					<label for="username">Address</label>
					<input type="text" name="address" placeholder="" required>
				</div>
				<div class="fields email">
					<label for="username"> Email </label>
					<input type="email" name="email" placeholder="">
				</div>
				<div class="fields contact">
					<label for="username">Contact number</label>
					<input type="text" name="contact" placeholder="" required>
				</div>
				<div class="fields u-name">
					<label for="username">Create username</label>
					<input type="text" name="uname" placeholder="" required>
				</div>
				<div class="fields u-name">
					<label for="username">Confirm password</label>
					<input type="text" name="uname" placeholder="" required>
				</div>
				<div class="fields u-pass">
					<label for="username">Create password</label>
					<input type="password" name="upass" placeholder="" required>
				</div>
				<div class="fields u-pass">
					<label for="username">Confirm password</label>
					<input type="password" name="upass" placeholder="" required>
				</div>

				<div class="fields button">
					<button type="button">Register</button>
				</div>
				<p>
					Already have an account?	<a href="login.php">Log in</a>
				</p>
		</form>
		
	</center>

	<script type="text/javascript">



//Function to calculatee age

function calculateAge() {

	//get the dirthdate
	var birthdate = document.getElementById("birthdate").value;

	//Create a formdata object to send data to the Php file
	var formData = new FormData();
	formData.append('birthdate', birthdate);

	//send the birthdate to the php file using AJAX
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'server.php', true);
	xhr.onload =function() {
		if (xhr.status == 200) {
			//Display the result in the result
			document.getElementById("result").innerHTML = xhr.responseText;

		}
	};
	xhr.send(formData);

}
		




	</script>

		

</body>
</html>