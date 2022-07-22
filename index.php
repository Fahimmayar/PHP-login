<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - System</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" style="margin: auto; margin-top:100px;">
				<h1 class="text-center">Sign In</h1>
				<br>
				<hr>
				<br>
				<form method="POST" action="App/login.php" enctype="multipart/form-data">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" name="email" class="form-control" placeholder="example@gmail.com" id="email">
					</div>
					<br>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" placeholder="Password" name="password" class="form-control" id="pwd">
					</div>
					<br>
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</form>
				<br>
				<br>
				<br>
				<?php if( isset($_GET['fail'])){ ?>
				<div class="alert alert-danger">
					<strong>Ooops!</strong> Incorrect Username or Password
				</div>
				<?php } ?>
				<?php if( isset($_GET['session'])){ ?>
				<div class="alert alert-danger">
					<strong>Ooops!</strong> Please Login First
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>

</html>