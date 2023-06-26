<!DOCTYPE html>
<html lang="en">
<head>
   <title>AdminLogin</title>
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
    <h1 style="text-align:center">Admin
	  <form action="adminloginaction.php" method="post">
        <input type="adminid" name="adminid" required placeholder="Enter your id"><br>
        <button class="btn">Login</button>
    </h1>   
        <p style="text-align:center">Are you a customer?<a href="login.php">Login here</a></p>
      </form>
      <p style="text-align:center"><?php
        if(isset($_GET['flag'])){
            if($_GET['flag']==1)
            echo "<b>id is wrong !!<b>";
        } 
      ?></p>
</body>
</html>