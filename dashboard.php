<!DOCTYPE html>
<html lang="en">

<?php 
    require_once 'App/session.php';
    require_once 'App/connection.php';

    $id = $_SESSION['user']['id'];
    $result = $con->query("SELECT * FROM users WHERE id = ".$id);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $age = $row['age'];
    $email = $row['email'];
    $created = $row['created'];
    $updated = $row['updated'];
    $photo = "App/".$row['photo'];
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - System</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        *{
            color:#fff;
        }
        body{
            background-color: #29539b;
            background-image: linear-gradient(315deg, #29539b 0%, #1e3b70 74%);
            background-repeat: no-repeat;
            width: 100%;
            min-height: 1000px;
            color: #fff;
        }
    </style>
</head>

<body>
	<div class="container" style="margin-top: 50px;">
		<div class="row">
            <div class="col-md-6">
                <h3>My Profile</h3>
                <hr>
                <div class="text-center">
                    <img src="<?php echo $photo; ?>" class="img img-circle" width="200" height="200" 
                    style="border-radius:50%;" alt="">
                </div>
                <hr>
                <br>
                <div>
                    <table class="table table-borderd">
                        <tr>
                            <th>ID</th>
                            <td><?php echo $id; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td><?php echo $age; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <th>Register Date</th>
                            <td><?php echo $created; ?></td>
                        </tr>
                        <tr>
                            <th>Last Updated</th>
                            <td><?php echo $updated; ?></td>
                        </tr>
                    </table>
                    <div>
                        <a href="App/logout.php" class="btn btn-danger" style="width: 100%;">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <h3>Edit Profile</h3>
                <hr>
                <br>
                <br>
                <form action="App/update.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" style="padding: 30px;">
                    <div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" required value="<?php echo $name; ?>" class="form-control" placeholder="haris muhammadi" id="name">
					</div>
                    <br>
                    <div class="form-group">
						<label for="age">Age:</label>
						<input type="number" name="age" required value="<?php echo $age; ?>" class="form-control" placeholder="Ex. 15" id="age">
					</div>
                    <br>
                    <div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" required class="form-control" placeholder="example@gmail.com" 
                        id="email" value="<?php echo $email; ?>">
					</div>
                    <br>
                    <div class="form-group">
						<label for="password">Passoword:</label>
						<input type="password" name="password" required class="form-control" placeholder="password" id="password">
					</div>
                    <br>
                    <div class="form-group">
						<label for="password">Confirm Password:</label>
						<input type="password"  class="form-control" required placeholder="password" id="password">
					</div>
                    <br>
                    <div class="form-group">
						<label for="photo">Photo:</label>
						<input type="file" name="photo" required class="form-control" id="photo">
					</div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
					</div>
                </form>
            </div>
		</div>
	</div>
</body>

</html>