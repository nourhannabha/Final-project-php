<!DOCTYPE html>
<html lang="en">
<head>
   <title>SignUp</title>
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
    <h1 style="text-align:center">Signup
	 <form action="signupaction.php" method="post">
        <input type="text" name="custname" required placeholder="Enter your name"><br>
        <input type="email" name="email" required placeholder="Enter your email"><br>
        <input type="password" name="password" required placeholder="Enter your password"><br>
        <input type="password" name="cpassword" required placeholder="Confirm your password"><br>
        <button class="btn">Signup</button>
    </h1>   
        <p style="text-align:center">Already Have An Account? <a href="login.php">Login now</a></p>
    </form>
      <p style="text-align:center"><?php
        if(isset($_GET['flag'])){
            if($_GET['flag']==1){
               echo '<b>user already exist!<b>';}
            if($_GET['flag']==2){
               echo '<b>password not matched!<b>';}
        } 
      ?></p>

</body>
</html>