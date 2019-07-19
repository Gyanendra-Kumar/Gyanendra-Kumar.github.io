<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<style>
		body{
			background-image: url("banner.jpg");
		}
		.header{
			margin-left: 1040px;
			font-size: 25px;
			color:mediumseagreen;
		}
	#frm{
		width: 400px;
		padding:10px;
		margin-left: 900px;
		margin-top:50px;
		box-shadow:4px 5px 5px 7px white;
		border-radius:2px;
		height:450px;
	}
	.input-group{
		padding:5px;
		margin-left: 60px;
		color:white;
		font-size:20px;
		margin-top: 10px;
	}
	.inp{
		margin-top:5px;
		padding: 8px;
		border:none;
		width:70%;
		border-radius:2px;
		background-color:#f1f1f1;
	}
	.btn{
		width:70%;
		padding:8px;
		background-color: mediumseagreen;
		border:none;
		margin-left: 7px;
		font-size:20px;
		color:white;
	}
	.btn:hover{
		background-color: tomato;
		color:white;
		font-size:20px;

	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form id="frm" method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label><br>
			<input class="inp" type="text" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label><br>
			<input class="inp" type="email" name="email" placeholder="Enter your email address" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label><br>
			<input class="inp" type="password" placeholder="Enter your password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label><br>
			<input class="inp" type="password" placeholder="Enter confirmed password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
	
	</form>
</body>
</html>