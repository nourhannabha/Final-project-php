<?php
include("db_config/connect.php");
session_start();

$custid=$_SESSION['cust_info']['custid'];
$sql = "SELECT * FROM cart WHERE custid='$custid'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if ($result) {
    $_SESSION['cart_info']=$row;
    $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/maincss.css">
</head>
<body>
<h1>
    <p class="par1">
        Shopping Cart<br>
        <a href="mainpage.php" title="Back To Main Page"><img src="carticon.jpg" width="40" height="40"></a>
    </p>
    <ul>
        <li><a href="haircare.php">Haircare &nbsp;</a></li>
        <li><a href="skincare.php">Skincare &nbsp;</a></li>
        <li><a href="perfume.php">Perfume &nbsp;</a></li>
        <li><a href="makeup.php">Makeup &nbsp;</a></li>
    </ul>
    <hr>
</h1>
<table>
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Description</th>
        <th>Product Price</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $row): ?>
        <tr>
           <form method="post" action="checkout.php">
             <input type="hidden" name="productname" value="<?php echo $post['productname']; ?>">
             <input type="hidden" name="productimage" value="<?php echo $post['productimage']; ?>">
             <input type="hidden" name="description" value="<?php echo $post['description']; ?>">
             <input type="hidden" name="productprice" value="<?php echo $post['productprice']; ?>">
             <td><?php echo $row['productname']; ?></td>
             <td><img src="<?php echo $row['productimage']; ?>" width="100" height="100"></td>
             <td><?php echo $row['description']; ?></td>
             <td><?php echo $row['productprice']; ?></td>
           </form>
            <td>
                <form method="get" action="removefromcart.php">
                    <input type="hidden" name="productname" value="<?php echo $row['productname']; ?>">
                    <input type="hidden" name="remove">
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="checkout.php"><b><?php echo "<div style='text-align:right'>Checkout->"?></b></a>
<a href="mainpage.php"><b><?php echo "<div style='text-align:left'><-Back"?></b></a>
</body>
</html>

