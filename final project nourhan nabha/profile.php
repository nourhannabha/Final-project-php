<?php
include("db_config/connect.php"); 
session_start();
$sql="SELECT * FROM customers WHERE custid=(SELECT max(custid) From customers)";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$_SESSION['cust_info'] = $row;
$custid=$_SESSION['cust_info']['custid'];
$custname =$_SESSION['cust_info']['custname'];
$email=$_SESSION['cust_info']['email'];
$password =$_SESSION['cust_info']['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Profile</title>
   <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<h1>
<p class="par1">
  Profile<br>
  <a href="mainpage.php" title="Back To Main Page"><img src="profileicon.png" width="30" height="30"></a>
</p>
    <ul>
        <li><a href="haircare.php">Haircare &nbsp;</a></li>
        <li><a href="skincare.php">Skincare &nbsp;</a></li>
        <li><a href="perfume.php">Perfume &nbsp;</a></li>
        <li><a href="makeup.php">Makeup &nbsp;</a></li>
    </ul>
    <hr>
</h1>
  <h2 style="text-align: center;">Customer Details:</h2>
  <div style="margin: auto;max-width: 600px;text-align: center;">ID: <?php echo $custid; ?></div>
  <div style="margin: auto;max-width: 600px;text-align: center;">Name: <?php echo $custname; ?></div>
  <div style="margin: auto;max-width: 600px;text-align: center;">Email: <?php echo $email; ?></div>
  <div style="margin: auto;max-width: 600px;text-align: center;">Password: <?php echo $password; ?></div>
</body>
</html>