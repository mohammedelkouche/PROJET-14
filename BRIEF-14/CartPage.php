<?php 
    include "connexion.php";
    include "Navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCartPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- navbar -->
    <div>
        <h1>Shopping Cart</h1>
    </div> 
    <div id="frame">   
        <div>
            <div id="frame-content">
                <div class="info">
                    <div class="clearfix">
                        <img class="product-on-cart" src="image/test-photo.jpg" alt="" width="150" height="150">
                    </div>
                    <div >
                        <p id="product-name"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...</p>
                        <p id="product_price">price: <span id="product-price-value">12</span> </p>
                        <div class="container">
                            <input type="button" onclick="decrementValue()" value="-" class="button_increment" />
                            <input type="text" name="quantity" value="1"  size="1"  id="quantity" />
                            <input type="button" onclick="incrementValue()" value="+" class="button_increment"/>
                        </div>
                    </div>
                </div>
                <div>
                    <hr id="demarcation">
                    <p id="subtotal-price">Subtotale Price :  <span id="subtotal-value">12</span> 
                    <!-- </p id="subtotal-value">12</p> -->
                </div>
            </div>
            <hr id="demarcation1">
        </div>    
            <div id="Checkout-total">
                <div class="margin-button">
                    <!-- <button type="submit" name="Proceed">Proceed to Checkout</button> -->
                    <a href="">Proceed to Checkout</a>
                </div>
                <!-- <div class="margin-total">
                    <p>TOTAL </p>
                </div> -->
                <div class="total_value">
                    <p class="total">Total</p>
                    <p>Value</p>
                </div>
            </div>
            </div>   
    </div>
    
    <script src="script.js"></script>
    <?php 
        include "footer.php";
    ?>  
    <!-- footer -->
</body>
</html>