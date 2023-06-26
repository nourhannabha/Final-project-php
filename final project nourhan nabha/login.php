<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login</title>
   <link rel="stylesheet" href="css/signup.css">

</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align:center">Login
	  <form action="loginaction.php" method="post">
        <input type="email" name="email" required placeholder="Enter your email"><br>
        <input type="password" name="password" required placeholder="Enter your password"><br>
        <button class="btn">Login</button>
    </h1>   
        <p style="text-align:center">Don't Have An Account? <a href="signup.php">Register now</a></p>
        <p style="text-align:center">Are you an admin?<a href="adminlogin.php">Login here</a></p>
      </form>
      <p style="text-align:center"><?php
        if(isset($_GET['flag'])){
            if($_GET['flag']==1)
            echo "<b>email or pass is wrong !!<b>";
        } 
      ?></p>
</body>
</html>