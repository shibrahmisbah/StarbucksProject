<!DOCTYPE html>
<!--
Modified by: Shibrah Misbah
991593708
Date: 2021-04-06
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Page</title>
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
    </head>
    <body>
      <header class="orderhdr">
          <img src = "images/logo-en.png" height="150" width="150">
          <h1>Your order is as follows:</h1>
          <h2>
              <?php
              
              #compile all variables to store user input
              $quantity = (int)$_REQUEST['quantity'];
              $size = $_REQUEST['size'];
              $cream = (int)$_REQUEST['cream'];   
              $sgr = (int)$_REQUEST['sugar'];
              
               #calculate total + tax
               $totalCoffee = 2.65*$quantity;
               $tax = $totalCoffee*0.13;
               $final = $totalCoffee + $tax;
               $finalCost= number_format($final,2);  
              
               #display message
               echo "<br>You ordered ".$quantity." ".$size." coffee(s) with ".
                    $cream." drops of cream and ".$sgr." packs of added sugar.".
                    "<br> Your total will be $ ".$finalCost.".";?>
          </h2> 
      </header>
      <main class = "main">
              <?php       
              #change size of images based on user input for size 
              if($size=='Small')
              {   
                echo "<div class='b1'><img src = 'images/cup.jpg' height='300' width='170'></div>";
              }
              else if($size=='Medium')
              {
                echo "<div class='b1'><img src = 'images/cup.jpg' height='370' width='240'></div>";
              }
              else if($size=='Large')
              {
                echo "<div class='b1'><img src = 'images/cup.jpg' height='440' width='310'></div>";
              }
              else if($size=='XL')
              {
                echo "<div class='b1'><img src = 'images/cup.jpg' height='510' width='380'></div>";
              }
       
              #for loop to display images of cream 
              for($i = 1; $i <= $cream; $i++)
              {   
                echo "<div class='b2'>"."<img src = 'images/plus.jpg' height='50' width='70'>".
                "<img src = 'images/cream.jpg'>"."<div>";     
              };
       
              #for loop to display images of sugar 
              for($i = 1; $i <= $sgr; $i++)
              {   
                echo "<div class='b2'>"."<img src = 'images/plus.jpg' height='50' width='70'>"
                ."<img src = 'images/sugar.jpg'>"."</div>";
              };
             ?>
     </main>  
    </body>
</html>



