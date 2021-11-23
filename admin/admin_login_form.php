<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<form method="post" action="admin_login.php">
		
		<div class="popup" id="popup-1">
			<div class="content">
				<div class="close-btn" onclick="togglePopup()">
					
				</div>
				<h2>Log In</h2>
				<div class="input-field">
					<input type="text" name="name"  placeholder="Username" class="validate">
				</div>
				<div class="input-field">
					<input type="password" name="password" placeholder="Password" class="validate" >
				</div>
			</div>
		</div> 
		<div>
		<input type="submit" value="Login" class="second-button" name="submit">
		</div>
		<div>
			<a href="index.php"><input type="button" value="Back" class="third-button"  name="submit"></a>
			
		</div>
		</form>
	<button onclick="togglePopup()" class="first-button">Admin Login</button>
		
	<script>
		//active pop-up
		function togglePopup(){
			document.getElementById("popup-1").classList.toggle("active");
		}
	</script>

</body>
</html>