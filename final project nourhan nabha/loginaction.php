<?php
include("db_config/connect.php"); 

 $email = $_POST['email'];
 $password = $_POST['password'];

 $sql = "SELECT * FROM customers WHERE email='$email' && password ='$password'";
 $result = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($result);
 if($count>0)
 {
   $row=mysqli_fetch_assoc($result);
   $_SESSION['cust_info']=$row;
    header("Location:mainpage.php");
 }
 else
 {
    header("Location:login.php?flag=1");
 }

?>