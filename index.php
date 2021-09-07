<!DOCTYPE html>
<!--
Modified by: Shibrah Misbah
991593708
Date: 2021-04-06
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Starbucks</title>
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
    </head>
    <body>
        <form id="form1" method="POST" action="order.php">
            <header class="hdr">
             <img src = "images/logo-en.png" height="150" width="150">
             <br>
             <h1>Welcome to Starbucks!</h1>
            </header>
            <div class='f1'>
		<fieldset> 
                     <legend>Quantity</legend>
                     <p>
		     <label>Please specify your quantity.</label>&nbsp;&nbsp;
		     <input type="number" id='quantity' name="quantity" min="1" required>
                     </p>
                     <br>
                     <br>
                </fieldset>
            </div>
            <div class='f2'>
                <fieldset> 
                     <legend>Size</legend>
                        <p>
                        <label>Please specify your size:</label>&nbsp;&nbsp;
                        <select name="size">
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="XL">XL</option>
                        </select>
                        </p>
                </fieldset>
            </div>
            <div class='f3'>
		<fieldset> 
                     <legend>Quantity of Cream</legend>
		        <p>
                        <label>Please specify the number of cream to be added:</label>&nbsp;&nbsp;
                        <input type="number" id='cream' name='cream' min="1" max="5" required>
                        </p>
                </fieldset>
            </div>  
            <div class='f4'>
		<fieldset> 
		     <legend>Quantity of Sugars</legend>
		        <p>
                        <label>Please specify the number of sugar to be added:</label>&nbsp;&nbsp;
		        <input type="number" id='sugar' name='sugar' min="1" max="8" required>
                        </p>
                </fieldset>
            </div>
                <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
