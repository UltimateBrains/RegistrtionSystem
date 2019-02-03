<?php include('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration System using PHP & MySSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
 
     <form method="POST" action="register.php">
      <!-- display validation errors here-->
      <?php include 'errors.php';       ?>
	     <div class="input-group">
	     	<label>User Name</label>
	     	<input type="text" name="username" value="<?php echo $username; ?>">
	     </div>
	       <div class="input-group">
	     	<label>Email</label>
	     	<input type="text" name="email" value="<?php  $email; ?>">
	     </div>
	       <div class="input-group">
	     	<label>Password</label>
	     	<input type="password" name="password_1">
	     </div>
	       <div class="input-group">
	     	<label>Confirm Password</label>
	     	<input type="password" name="password_2">
	     </div>
	     <div class="input-group">
	     	<button type="submit" name="register" class="btn">Register</button>
	     </div>
	     <p> Already A Memeber ? <a href="login.php">Sign In</a></p>
     </form>

</body>
</html>