<?php
include("db_config/connect.php");
$sql="SELECT adminname FROM admin";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$_SESSION['a_info'] = $row['adminname'];
$adminname=$_SESSION['a_info'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Addtoproducts</title>
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    <h1>Welcome,<?php echo $adminname ?>
    <p class="ic"><a href="admin.php"><img src="profileicon.png" width="40" height="30" title="Admin"></a></p>
    </h1>
	 <form class="pnf" action="adminproductsaction.php" method="post">
     <h2>New Product</h2>  
     <label for="productname">Product Name:</label><br>
     <input type="text" name="productname"><br>

     <label for="productimage">Product Image:</label><br>
     <input type="text" name="productimage"><br>

     <label for="description">Description:</label><br>
     <input type="text" name="description"><br>

     <label for="productprice">Product Price:</label><br>
     <input type="text" name="productprice"><br>

     <label for="categoryname">Category Name:</label><br>
     <input type="text" name="categoryname"><br>

     <button class="btn">ADD</button>
     </form>
     <p style="text-align:center">
     <?php if(isset($_GET['flag'])){
            if($_GET['flag']==1){
               echo '<a href="mainpage.php"><b>Your order was successful!<b></a>';} 
            }        
      ?></p>           
</body>
</html>