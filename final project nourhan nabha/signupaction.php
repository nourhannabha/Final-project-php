<?php
include("db_config/connect.php"); 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

   $custname = $_POST['custname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

   $sql = "SELECT * FROM customers WHERE email = '$email' && password = '$password' ";
   $result = mysqli_query($conn, $sql);
   $count=mysqli_num_rows($result);
   if($count> 0){
    header("Location:signup.php?flag=1");
   }
   else{

      if($password != $cpassword){
        header("Location:signup.php?flag=2");
      }else{
         $query = "INSERT INTO customers(custname,email,password) VALUES('$custname','$email','$password')";
         mysqli_query($conn, $query);
         header('Location:mainpage.php');
         exit();
      }
   }
};
?>