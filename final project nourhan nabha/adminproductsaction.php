<?php
include("db_config/connect.php"); 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

   $productname = $_POST['productname'];
   $productimage = $_POST['productimage'];
   $description = $_POST['description'];
   $productprice = $_POST['productprice'];
   $categoryname = $_POST['categoryname'];
   $query = "INSERT INTO products(productname,productimage,description,productprice,categoryname) VALUES('$productname','$productimage','$description','$productprice','$categoryname')";
   mysqli_query($conn, $query);
   header('Location:adminproducts.php?flag=1');
   exit();
      
}
?>