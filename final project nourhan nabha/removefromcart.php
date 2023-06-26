<?php
include("db_config/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['productname'])) {
        $productname = $_GET['productname'];
        $query = "DELETE FROM cart WHERE productname ='$productname'";
        $result = mysqli_query($conn, $query);
       

        header('Location: cart.php');
        exit();
    }
}
?>
