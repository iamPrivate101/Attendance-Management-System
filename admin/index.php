<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/time.css">

    <style>
    	body{
    		background:#c0c0c0;
    	}

    	h2{
    		margin-top: 10px;
    	}
    </style>
	<title>Index page</title>
    
  </head>
  <body>
  	
  	<!-- Header -->
	   <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center , white">
					ATTENDANCE MANAGEMENT SYSTEM
				</h2>
			</div>
		</div>
	   </div>

	   <!-- nav-bar -->
	   <br>
	   <section class="nav-bar">
		 <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link " href="http://localhost/project%20I/admin/index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_login_form.php">Admin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../teacher/teacher_login_form.php">Teacher</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../student/student_login_form.php">Student</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
		

		<!-- main content -->
		<br><br>
		<div class="container-fluid" align="center">
			<div class="row">
				<div class="col-md-8">
					<video width="85%" height="400" loop autoplay muted controls>
  			<source src="../video/home.mp4" type="video/mp4">
			</video>
				</div>

				
		<!-- card discription -->

				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="../image/ramesh.jpg" alt="project manager" height="300px">
					  <div class="card-body">
					    <h5 class="card-title"><center>Project Manager</center></h5>

					    <p class="card-text"><center>Ramesh Singh Saud</center></p>
					    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					  </div>
					</div>
				</div>
			</div>
		</div>


		<!-- About -->
		<br><br><br>
	<section class="footer">
		<div class="container text-left, white"><h2><u>Contact</u></h2><br>
			<div class="row">
				<div class="col-md-4 " >
					<h5><u>Mailing Address</u></h5>
					<p><b>Address : </b>Shankhamul- 9 , Lalitpur, Nepal</p>
					<p><b>Phone : </b>(+977) 5260894, 9851073795, 015260890</p>
					<p><b>Website :</b><a href="https://nagarjunacollege.edu.np/">www.nagarjunacollege.edu.np </a></p>
					<p><b>Email : </b> ncitcollege@hotmail.com</p>
				</div>

				<div class="col-md-4">
					<h5><u>Follow Us on</u></h5>
					<p><a href="https://www.facebook.com/NagarjunaCollegeOfInformationTechnology"><i class="fab fa-facebook-square"></i> Facebook </a></p>
					<p><a href="https://www.facebook.com/NagarjunaCollegeOfInformationTechnology"><i class="fab fa-instagram"></i>Instagram</a></p>
					<p><a href="https://www.facebook.com/NagarjunaCollegeOfInformationTechnology"><i class="fab fa-twitter-square"></i>Twitter</a></p>
					<p><a href="https://www.facebook.com/NagarjunaCollegeOfInformationTechnology"><i class="fab fa-youtube"></i></i>Youtube</a></p>
				</div>
				<div class="col-md-4">
					<h5><u>Map</u></h5>
					<!-- map -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.853049485157!2d85.3298751!3d27.6798028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc94f84d1f057520f!2sNagarjuna%20College%20of%20IT!5e0!3m2!1sen!2snp!4v1629382710993!5m2!1sen!2snp" width="420" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>



	<?php 
	include "copyright.php";
	 ?>

		


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	function scrollToTop() {
    		window.scrollTo({
    			top: 0;
    			behavior : 'smooth';
    		})
    	}
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>