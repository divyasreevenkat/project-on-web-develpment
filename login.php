<?php include('server.php');  ?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="header">
<h2>Login</h2>
</div>

<form  method="post" action="webpage.php">
  
   <div class="input-group">
  <label>Email</label>
  <input type="text" name="Email">
  </div>



<div class="input-group">
  <label>Password</label>
  <input type="text" name="Password">
  </div>



<div class="input-group">
   <button type="submit" name="webpage.php" class="btn">Login</button>
</div>
 

 
  Already a member? <a href="register.php">Sign up</a>
   
</form>

</body>
</html>