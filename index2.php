<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sign Up - CLTX</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Welcome Back!</h1>
				<p>CLTX is the easiest, safest, and fastest way to buy & sell crypto asset exchange.</p>
				<span>
					<p>login with social media</p>
					
				</span>
			</div>
		</div>


		<div class="right">
			<h5>Sign </h5>

			<h5>up</h5>
			<p>Already Have a Account? <a href="index.html">Login</a> </p>
			<div  
			class="inputs"> <form action="" method="post">
				<input name="first" type="text" placeholder="First Name">
				<br>
				<input  name="last" type="text" placeholder="Last name">
				<br>
				<input  name="user" type="text" placeholder="username">
				<br>
				<input  name="email" type="email" placeholder="Email">
				<br>
				<input  name="password" type="password" placeholder="Password">
				<br>
				<input  name="conpass" type="password" placeholder="Confirm Password">
				<button>Login</button>
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			  $first = $_POST['first'];
			  $last = $_POST['last'];
	          $user = $_POST['user'];
			  $email = $_POST['email'];
			  $Password = $_POST['password'];
			  $conpass = $_POST['conpass'];

			
			
			// Submit these to a database
			// CONNECTING TO A DATABASE THROUGH MYSQLI EXTENSION
			$servername="localhost";
			$username="root";
			$password="";
			$database="crypto";
			// create a connection
		  $con = mysqli_connect($servername, $username, $password, $database);
		  $sql = "INSERT INTO `signup` (`S.No`, `First Name`, `Last Name`, `User Name`, `Email`, `Password`, `Confirm password`) VALUES (NULL, '$first', '$last', '$user', '$email', '$Password', '$conpass');";
		  $result =  mysqli_query($con, $sql);
		  if($result){
			echo "<tr><td>";
			echo "Your information is saved successfully";
			echo "</tr></td>"; 
		  }
		}
		  ?>
			</form>
			

			</div>
            
			<br><br>

			<div class="remember-me--forget-password">
				<!-- Angular -->
				<label>
					<input type="checkbox" name="item" checked />
					<span class="text-checkbox">Remember me</span>
				</label>
				<p>forget password?</p>
			</div>

			<br>
			
				
			<!-- </a> -->
		</div>

	</div>
	<!-- partial -->

</body>

</html>