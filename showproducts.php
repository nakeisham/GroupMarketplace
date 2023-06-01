<?php
$connect = mysqli_connect('localhost', 'njm55_groupuser', 'Jj?CPYz!6Op5', 'njm55_GroupMarketplace');
require_once 'connectproductsjson.php' ;
$sql = " SELECT * FROM product " ;
$all_product = $connect->query ($sql) ;
?>





<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset= "UTF-8">
     <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
     <meta name= "viewport" content="width=device-width, initial-scale=1.0">
     <link rel = " stylesheet " href = " font / css / all.min.css ">
    <link rel = " stylesheet " href = "productstyle.css ">
     <title>Ecommerce Website</title>
</head>
 <body>
     <!-- <?php
       include_once 'header.php';
    ?> -->
    <main>
<?php
    while($row = mysqli_fetch_assoc($all_product)){
?> 


        <div class= "card">
            <div class="image">
                 <img src=" <?php echo $row ["image"];?>" alt="">
            </div>
            <div class= "caption">
        <p class = " rate ">
            <i class = " fas fa - star " > </i>
            <i class = " fas fa - star "> </i>
            <i class = " fas fa - star "></i>
            <i class = " fas fa - star " > </i>
            <i class = " fas fa - star " > </i>
        </p>
                <p class = "product_name" ><?php echo $row["productname"] ?> </p>
                <p class = "price"><b>£<?php echo $row["price"]; ?> </b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
    <?php
    }
    ?>


    </main>
 </body>
 </html>
