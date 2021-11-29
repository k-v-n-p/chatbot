
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Medicbot</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body style="background-color: #f6f5f7">

    <!--
        <nav class="header_options">
            <a class="navbar-brand" href="#">login to continue</a>
        </nav>
        -->
		<?php
			include "db.php";
			error_reporting(0);
			session_start();
			if(isset($_SESSION['username'])){
				header("Location: welcome.php");
			}
			if(isset($_POST['submit1'])){
				$username=$_POST['username'];
				$email=$_POST['email'];
				$password=md5($_POST['password']);
				$confirmPassword=md5($_POST['confirmPassword']);
				if($password == $confirmPassword){
					$check_query="SELECT * from users where email='".$email."'AND password='".$password."'limit 1";
					$result=mysqli_query($link, $check_query);
					if(mysqli_num_rows($result)>0){
						echo "<script>  alert('Account already exists with this email.'); </script>";
					}
					else{
						$insert_query="INSERT INTO users(username, email, password) 
										VALUES('$username', '$email', '$password')";
						$insert_result=mysqli_query($link, $insert_query);		
						if(!$insert_result) {
							echo "<script>  alert('Cannot create account. Please contact devs'); </script>";
						}
						else{
							//echo "<script>  alert('Registration successfull'); </script>";
							$username="";
							$email="";
						}
					}

				}
				else{
					echo '<script> document.getElementById("alr").innerHTML = "Passwords do not Match."; </script>';
					//echo '<script>  alert('apsadfm'); </script>';
				}
			}

			session_start();

			if(isset($_POST['submit2'])){
				$email=$_POST['email'];
				$password=md5($_POST['password']);
				$check_query="SELECT * from users where email='".$email."'AND password='".$password."'limit 1";
				$result=mysqli_query($link, $check_query);
				if(mysqli_num_rows($result)>0){
					$row=mysqli_fetch_assoc($result);
					$_SESSION['username']=$row['username'];
					header("Location: welcome.php");
				}
				else{
					echo '<script> document.getElementById("alr").innerHTML = "Incorrect credentials"; </script>';
					//echo '<script>  alert('apsadfm'); </script>';
				}

			}
			
		?>
 
 <div id="alr" class="alert alert-warning" role="alert" style="background-color: #226998">  </div>
<br><br><br>
    <div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action=" ">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>use your email for registration</span>
            <div class="form-group">
			<input name="username" type="username" placeholder="Name" value="<?php echo $_POST['username']; ?>" class="form-control"  required/>
            </div>
            <div class="form-group">
			<input name="email" type="email" placeholder="Email" class="form-control"   required/>
            </div>
            <div class="form-group">
			<input name="password" type="password" placeholder="Password" class="form-control"  required/>
            </div>
            <div class="form-group">
			<input name="confirmPassword" type="password" placeholder="Confirm Password" class="form-control"  required/>
            </div>
			<button name="submit1" type="submit" >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action=" ">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>use your account</span>
            <div class="form-group">
			<input name="email" type="email" placeholder="Email" class="form-control"  required/>
            </div>
            <div class="form-group">
			<input name="password" type="password" placeholder="Password" class="form-control"  required/>
            </div>
			<a href="#">Forgot your password?</a>
			<button  name="submit2"  type="submit" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
    </div>

<!--
    <div style="margin-right: 500px; margin-top: 100px; margin-left: 100px; object-fit: contain">
    </div> 
        <div style=" text-align: center; margin-top: 100px;">
            <a class="btn btn-primary btn-lg active" href="/login">Login</a>
            </br></br>
            <a class="btn btn-primary btn-lg active" href="/register">Register</a>
        </div>
        
-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="js/login.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
