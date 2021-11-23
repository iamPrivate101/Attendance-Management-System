
 <!DOCTYPE html>
<html>
<head>
	<title>Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="../admin/css/login.css">
</head>
<body>
	<form method="post" action="teacher_login.php">
		
		<div class="popup" id="popup-1">
			<div class="content">
				<div class="close-btn" onclick="togglePopup()">
					
				</div>
				<h2>Log In</h2>
				<div class="input-field">
					<input type="text" name="name"  placeholder="Username" required="required" class="validate">
				</div>
				<div class="input-field">
					
					<select class="validate" name="faculty" required="required">
						<option>FACULTY</option>
						<option value="BIM">BIM</option>
						<option value="BCA">BCA</option>
						<option value="BSc.CSIT">BSc.CSIT</option>
					</select>
				</div>
				<div class="input-field">
					<input type="password" name="password" placeholder="Password" class="validate" required="required">
				</div>
			</div>
		</div> 
		<div>
		<input type="submit" value="Login" class="second-button" name="submit">
		</div>
		<div>
			<a href="../admin/index.php"><input type="button" value="Back" class="third-button"  name="submit"></a>
			
		</div>
		</form>
	<button onclick="togglePopup()" class="first-button">Teacher Login</button>
		
	<script>
		//active pop-up
		function togglePopup(){
			document.getElementById("popup-1").classList.toggle("active");
		}
	</script>

</body>
</html>