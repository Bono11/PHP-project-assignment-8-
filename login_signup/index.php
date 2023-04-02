<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>

<body>
  <div>
    
    <form action="php/signup.php" method="post">
      <h4>Create Account</h4>

      <?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

			</div>
      <div class="mb-3">
        <label class="form-label">First Name::::::</label>
        <input type="text" class="form-control" name="fname">
      </div>
      <div class="mb-3">
        <label class="form-label">Last Name:::::::</label>
        <input type="text" class="form-control" name="lname">
      </div>
      <div class="mb-3">
        <label class="form-label">Email::::::::::::::</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password:::::::::</label>
        <input type="password" class="form-control" name="pass1">
      </div>
      <div class="mb-3">
        <label class="form-label">Re-enter Pswd:</label>
        <input type="password" class="form-control" name="pass2">
      </div>


      <button type="submit" class="btn btn-primary">Sign Up</button>
      <a href="login.php">Login</a>
    </form>
  </div>
</body>

</html>