<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
 ?>
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
    
    <form action="php/delete.php" method="post">
      <h4>Delete account</h4>

			</div>
 
      <div class="mb-3">
        <label class="form-label">Delete account? (Y/N)::::::</label>
        <input type="text" class="form-control" name="ans">
      </div>
      <button type="submit" class="btn btn-primary">Delete</button>
    </form>
  </div>
</body>

</html>
<?php }else {
	header("Location: home.php");
	exit;
} ?>