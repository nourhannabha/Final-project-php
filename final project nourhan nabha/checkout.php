<?php
include("db_config/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_POST['custname']) && isset($_POST['email']) && isset($_POST['orderaddress']) && isset($_POST['ordercity']) && isset($_POST['orderregion']) && isset($_POST['orderpostalcode']) && isset($_POST['ordercountry'])){  
    $custid=$_SESSION['cust_info']['custid'];
    $custname = $_POST['custname'];
    $email = $_POST['email'];
    $sql="SELECT productname,productimage,description,productprice FROM cart WHERE custid='$custid'";
    $result= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['cart_info']=$row;
    $productname = $_SESSION['cart_info']['productname'];
    $productimage = $_SESSION['cart_info']['productimage'];
    $description = $_SESSION['cart_info']['description'];
    $productprice = $_SESSION['cart_info']['productprice'];
    $orderaddress = $_POST['orderaddress'];
    $ordercity = $_POST['ordercity'];
    $orderregion = $_POST['orderregion'];
    $orderpostalcode = $_POST['orderpostalcode'];
    $ordercountry = $_POST['ordercountry'];
    $i=0;
    while($i<$count){
    $query = "INSERT INTO orders (custid,custname,email,productname,productimage,description,productprice,orderaddress,ordercity,orderregion,orderpostalcode,ordercountry) VALUES ('$custid','$custname','$email','$productname','$productimage','$description','$productprice','$orderaddress','$ordercity','$orderregion','$orderpostalcode','$ordercountry')";
    $result1 = mysqli_query($conn, $query);
    $i++;
    }
    if ($result1) {
        header("Location:checkout.php?flag=1");
        exit();
    } else {
        header("Location:checkout.php?flag=2");
        exit();
    }
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
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
<h2 style="text-align:center">Checkout</h2>
<form method="post" action="" style="text-align:center">
    <label for="custname">Customer Name:</label><br>
    <input type="text" name="custname"><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email"><br>

    <label for="orderaddress">Address:</label><br>
    <input type="text" name="orderaddress"><br>

    <label for="ordercity">City:</label><br>
    <input type="text" name="ordercity"><br>

    <label for="orderregion">Region:</label><br>
    <input type="text" name="orderregion"><br>

    <label for="orderpostalcode">Postal Code:</label><br>
    <input type="text" name="orderpostalcode"><br>

    <label for="ordercountry">Country:</label><br>
    <input type="text" name="ordercountry"><br>

    <button class="btn">Place Order</button>
</form>
<p style="text-align:center">
<?php
     if(isset($_GET['flag'])){
            if($_GET['flag']==1){
               echo '<a href="mainpage.php"><b>Your order was successful!<b></a>';}                        
            if($_GET['flag']==2){
               echo '<b>Error inserting order details!<b>';}
        } 
?></p>
</body>
</html>
