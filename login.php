<?php
session_start();
include('db.php');
include('header.php');

if(isset($_POST['btnLogin'])){
	$username = $_POST['username'];
	$password =$_POST['password'];
	#$epassword = md5($password);
	$sql = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";
	$results = mysqli_query($db,$sql);

	if(mysqli_num_rows($results)>0){
		$_SESSION['username'] = $_POST['username'];
		header('Location:index.php');
	}else{
		echo"Invalid username/password";
		header('Location:login.php');
	}
}


?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<form action="login.php" method="post">
		<div class="card">
			<div class="card-header" style="background-color: #16d843; color: #fff;">Admin Login</div>
			<div class="card-body">
				
				<div class="form-group">
					<label for="email">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" name="btnLogin" class="btn btn-outline-primary" style="width: 100%;">Login</button>
				</div>

			</div>
		</div>
		</form>
	</div>
	</div>
</div>
