<?php
include("db_config/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['search'])) {
        $search= $_GET['search'];
        $query = "SELECT * FROM products WHERE productname LIKE '%$search%'";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "Error executing the query: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Search</title>
    <link rel="stylesheet" href="css/maincss.css">
</head>
<body>
<h1>
    <p class="par1">
        Product Search<br>
        <a href="mainpage.php" title="Back To Main Page"><img src="magnifiericon.jpg" width="40" height="40"></a>
    </p>
    <ul>
        <li><a href="haircare.php">Haircare &nbsp;</a></li>
        <li><a href="skincare.php">Skincare &nbsp;</a></li>
        <li><a href="perfume.php">Perfume &nbsp;</a></li>
        <li><a href="makeup.php">Makeup &nbsp;</a></li>
    </ul>
<hr></h1>
<h3 style="text-align:center;">Search Results</h3>
<?php if (isset($results) && !empty($results)): ?>
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
                <td><?php echo $row['productname']; ?></td>
                <td><img src="<?php echo $row['productimage']; ?>" width="100px" height="100px;"></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['productprice']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php elseif (isset($results) && empty($results)): ?>
    <p>No products found matching your search term.</p>
<?php endif; ?>

</body>
</html>
