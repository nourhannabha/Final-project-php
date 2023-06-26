<?php
include("db_config/connect.php"); 

    $sql = "SELECT * FROM products WHERE categoryname='skincare'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    session_start();

    if ($count>0) {
	    
        $_SESSION['skincare_info']=$row;
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
     <title>Skincare</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="css/cssskincare.css">
 </head>
 <body>
     <h1>
         <p class="par1">
             Skincare<br>
             <a href="mainpage.php" title="Back To Main Page"><img src="images/skincarelogo.jpg" width="40" height="40"></a>
         </p>
         <ul>
             <li>CeraVe &nbsp;</li>
             <li>Mario Badescu &nbsp;</li>
             <li>La Roche-Posay &nbsp;</li>
             <li>The Ordinary &nbsp;</li>
         </ul>
     <hr></h1>
     <h2>
         <p class="par2"><q>Nature gives you the face you have at twenty; it is up to you to merit the face you have at fifty.</q></p>
         <p class="par2">-Coco Chanel</p>      
     </h2>
     <h3>
         <img src="images/skincaregif.gif" class="gif">
         <p class="par3">Although good skin is the best foundation for your makeup,taking good care of your skin is important for<br> more than just your appearance.As the largest organ you have,your skin is essential to your general health.<br>If you take care of it,it can help take care of you.This is why it is so important to have a well-thought-out<br> skin care routine.For this reason,Beauty For You is working hard to match you with your perfect products.</p>
     </h3>
     <h4 style="text-align:center;">
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
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