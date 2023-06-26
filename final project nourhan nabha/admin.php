<?php
include("db_config/connect.php"); 
session_start();
$sql="SELECT * FROM admin";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$_SESSION['a_info'] = $row;
$adminid=$_SESSION['a_info']['adminid'];
$adminname =$_SESSION['a_info']['adminname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Admin</title>
   <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <h1 style="text-align: center;">Admin Details:</h1>
  <div style="margin: auto;max-width: 600px;text-align: center;">ID: <?php echo $adminid; ?></div>
  <div style="margin: auto;max-width: 600px;text-align: center;">Name:<?php echo $adminname; ?></div>
</body>
</html>




