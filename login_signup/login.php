<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <div>
    
    <form action="php/login.php" method="post">
      <h4>Login</h4>

      <?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

			</div>
 
      <div class="mb-3">
        <label class="form-label">Email::::::::::::::</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password:::::::::</label>
        <input type="password" class="form-control" name="pass1">
      </div>


      <button type="submit" class="btn btn-primary">Login</button>
      <a href="index.php">Sign-up</a>
    </form>
  </div>
</body>

</html>