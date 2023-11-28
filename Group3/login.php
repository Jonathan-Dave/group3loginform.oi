<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>LOG IN</title>
</head>

<body>
	
	<center>
		<form class="form1">
			 <h2>Log in</h2>
			<div class="field uname">
				<input type="text" id="username" placeholder="" required>
				<label for="username">Username</label>
			</div>
			<div class="field upass">
				<input type="password" id="password" name="password" placeholder="" required>
				<label for="upass" >Password</label>
				<span class="toggle-password" onclick="togglePassword()"> <img src="image/show.JPG" alt="Show Password" id="showImg">		</span>
			</div>
			<div class="field button">
				<button type="button">Log in</button>
				
			</div>
			<p>
			Don't have an account yet?	<a href="register.php">Register</a>
		</p>
		</form>
	</center>
	<script type="text/javascript" >
		function togglePassword() {
			// body...
			var passwordInput = document.getElementById('password');
			var toggleBtn = document.querySelector('.toggle-password img');


			if (passwordInput.type === 'password') {
				passwordInput.type = 'text';
				toggleBtn.src = 'image/hide.JPG';
				toggleBtn.alt = 'Hide Password';
			}else {
				passwordInput.type = 'password';
				toggleBtn.src ='image/show.jpg';
				toggleBtn.alt ='Show Password';
			}

		}

	</script>
	<style type="text/css">
		.upass {
		
		}
		.toggle-password {
			position: absolute;
			right: 5px;
			top: 50px;
			transform: translateY(-50px);
			cursor: pointer;
		}
		.toggle-password img {
			position: relative;
			width: 25px;
			height: 20px;
			border-radius:  20px;
			margin-right: 115px;
			margin-top: 140px;

		}
	</style>
	
</body>
</html>