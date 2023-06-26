<?php
include("db_config/connect.php"); 

 $adminid = $_POST['adminid'];

 $sql = "SELECT * FROM admin WHERE adminid='$adminid'";
 $result = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($result);
 
 if($count>0)
 {
    header("Location:adminproducts.php");
 }
 else
 {
    header("Location:adminlogin.php?flag=1");
 }

?>