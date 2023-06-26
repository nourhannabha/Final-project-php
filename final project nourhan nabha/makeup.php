<?php
include("db_config/connect.php"); 

    $sql = "SELECT * FROM products WHERE categoryname='makeup'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    session_start();

    if ($count>0) {

        $_SESSION['makeup_info']=$row;
        $results=[];
        while ($row=mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    }
    else {
        echo "Error" . mysqli_error($conn);
    }  
 mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Makeup</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="css/cssmakeup.css">
 </head>
 <body>
     <h1>
         <p class="par1">
             Makeup<br>
             <a href="mainpage.php" title="Back To Main Page"><img src="images/makeuplogo.jpg" width="40" height="40"></a>
         </p>
         <ul>
             <li>Estee Lauder &nbsp;</li>
             <li>L'Oreal &nbsp;</li>
             <li>Mac &nbsp;</li>
             <li>Maybelline &nbsp;</li>
         </ul>
     <hr></h1>
     <h2>
         <p class="par2"><q>Sometimes you just have to put on lip gloss and pretend to be psyched.</q></p>
         <p class="par3">-Mindy Kaling</p>
     </h2>
     <h3>
         <p>For most of the women,makeup is the most important tool in their everyday beauty armory.From lipsticks to eyeliners,to gloss;there is an extensive number of makeup items that can help make you feel better about yourselves.So,Beauty For You has collected various products from diverse leading brands to aid you in your search for products that suit you best.</p>
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