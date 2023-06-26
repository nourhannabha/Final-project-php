<?php
include("db_config/connect.php"); 

    $sql = "SELECT * FROM products WHERE categoryname='perfume'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    session_start();

    if ($count>0) {
	    
        $_SESSION['perfume_info']=$row;
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
     <title>Perfumes</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="css/cssperfumes.css">
 </head>
 <body>
     <h1>
         <p class="par1">
             Perfumes<br>
             <a href="mainpage.php" title="Back To Main Page"><img src="images/perfumelogo.jpg" width="30" height="30"></a>
         </p>
         <ul>
             <li>Gucci &nbsp;</li>
             <li>Prada &nbsp;</li>
             <li>Burberry &nbsp;</li>
             <li>Dior &nbsp;</li>
         </ul>
     <hr></h1>
     <h2>
         <p class="par2" title="Quote from the 2006 movie, Perfume: The Story of a Murderer."><q>Odors have a power of persuasion stronger than that of words, appearances, emotions, or will. The persuasive power of an odor cannot be fended off, it enters into us like breath into our lungs, it fills us up, imbues us totally. There is no remedy for it.</q></p>
         <p class="par2">―Patrick Süskind,Perfume: The Story of a Murderer</p>
         <p class="par3">The<b> above</b> quote highlights the importance of perfume.Perfume has always been a major factor for assesing one's attractiveness,so finding a perfume that compliments you should always be on your to do list.Beauty for you has dedicated an entire branch to assist you in your quest.</p>
     </h2>
     <h3> 
         Some of our best sellers: 
     </h3>
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