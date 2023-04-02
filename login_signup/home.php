<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>
<body>
    <div>
    	
    	<div>
            <h3 class="display-4 ">Welcome, <?=$_SESSION['fname']?> <?=$_SESSION['lname']?></h3>
            <a href="update.php">
            	Update Profile
            </a></br>

            <a href="logout.php">
            	Logout
            </a></br>
            <a href="delete.php" class="btn btn-warning">
            	Delete Account
            </a>
		</div>
    </div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>