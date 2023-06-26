<?php
include("db_config/connect.php"); 

    $sql = "SELECT * FROM products WHERE categoryname='haircare'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    session_start();

    if ($count>0) {
	    
        $_SESSION['haircare_info']=$row;
        $results = [];
        while ($row=mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    }
    else {
        echo "Error" . mysqli_error($conn);
    }  
 mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
 <head>
     <title>Haircare</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="css/csshaircare.css">
 </head>
 <body>
     <h1>
         <p class="par1">
             Haircare<br>
             <a href="mainpage.php" title="Back To Main Page"><img src="haircarelogo.jpg" width="40" height="40"></a>
         </p>
         <ul>
             <li>Oribe &nbsp;</li>
             <li>Odele &nbsp;</li>
             <li>Briogeo &nbsp;</li>
             <li>Olaplex &nbsp;</li>
         </ul>
     <hr></h1>
     <h2>
         <p class="par2"><q>Invest in your hair, it is the crown you never take off.</q></p>
         <p class="par2">- Casa Vera.</p>
     </h2>
     <h3>
         <p>Hair care is important for not only our appearance,but also for our overall hygiene.Having healthy hair allows us to look our best and ensure our hair and scalp is healthy,this means having a decent haircare routine with fitting products should always be a priority.Take a look at our haircare products.</p>
     </h3>
     <h4>
         Some of our best sellers:
     </h4> 
     <div style="margin: auto; max-width: 600px">
        <?php foreach ($results as $post): ?>
            <form method="post" action="addtocart.php" style="margin: auto; padding: 10px;">
             <input type="hidden" name="productname" value="<?php echo $post['productname']; ?>">
             <input type="hidden" name="productimage" value="<?php echo $post['productimage']; ?>">
             <input type="hidden" name="description" value="<?php echo $post['description']; ?>">
             <input type="hidden" name="productprice" value="<?php echo $post['productprice']; ?>">
             <div><b><?php echo $post['productname']; ?></b></div><br>
             <div><img src="<?php echo $post['productimage']; ?>" width="400" height="400"></div><br>
             <div><?php echo $post['description']; ?></div><br>
             <div><b><?php echo $post['productprice'];?></b></div><br>
             <div><button type="submit">Add To Cart</button></div>
            </form>
        <?php endforeach; ?>
    </div>
    <?php require "footer.php"?>
</body>
</html>