<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration System using PHP & MySSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Log In</h2>
	</div>
 
     <form method="POST" action="login.php">
     	 <!-- display validation errors here-->
      <?php include 'errors.php';       ?>
	     <div class="input-group">
	     	<label>User Name</label>
	     	<input type="text" name="username">
	     </div>
	     
	       <div class="input-group">
	     	<label>Password</label>
	     	<input type="password" name="password">
	     </div>
	       
	     <div class="input-group">
	     	<button type="submit" name="login" class="btn">Log In</button>
	     </div>
	     <p> Not yet a Memeber ? <a href="register.php">Sign Up</a></p>
     </form>

</body>
</html>