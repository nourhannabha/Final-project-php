<?php
include("db_config/connect.php"); 
session_start();
$custid=$_SESSION['cust_info']['custid'];
$sql="SELECT custname FROM customers WHERE custid='$custid'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$_SESSION['customer_info'] = $row['custname'];
$custname=$_SESSION['customer_info'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_POST['productname']) && isset($_POST['productimage']) && isset($_POST['description']) && isset($_POST['productprice'])) {
   
    $productname = $_POST['productname'];
    $productimage = $_POST['productimage'];
    $description = $_POST['description'];
	  $productprice = $_POST['productprice'];

    $query="insert into cart (custid,custname,productname,productimage,description,productprice) values ('$custid','$custname','$productname','$productimage','$description','$productprice')";
    mysqli_query($conn,$query);

    header('Location: cart.php');
    exit();
  }
}
?>