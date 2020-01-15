<?php
	include 'function/function.php';

	if (count($_POST)) {
		
	

	$data = new database();
	$login = $data->login();
	
	}
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/icons/favicon.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
	
<!-- cek pesan notifikasi -->
	<?php 
	
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="content">
			<div class="col-md-12">
				<!-- <div class="overlay"></div> -->
				<div class="banner" style="background-image: url(images/login.jpg);">
					<span>Sign in</span>
				</div>
			</div>
			<div class="col-md-12">
				<form action="index.php" method="post">
					<div class="form-group">
						<span>Username</span>
						<input type="text" name="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<span>Password</span>
                        <input class="input100 active" type="password" name="password" placeholder="Enter Password" id="psswrd"/>
                        <span style="margin-left: -3vh; margin-top: 15px; position: absolute;"><i class="fa fa-eye-slash" id="icon"></i></span>
                    </div>
					
					<div class="form-button">
						<input type="submit" name="login" value="Login" >
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>

	<script src="js/login.js"></script>
</body>
</html>