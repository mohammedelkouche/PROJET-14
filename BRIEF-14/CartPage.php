<?php 
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCartPage.css">
</head>
<body>
    <?php 
        include "Navbar.php";
    ?>
    <!-- navbar -->
    <div>
        <h1>Shopping Cart</h1>
    </div> 
    <div id="frame">   
     
        <div id="frame-content">
            <div class="info">
                <div class="clearfix">
                    <img class="img" src="image/test-photo.jpg" alt="" width="150" height="150">
                </div>
                <div >
                    <p id="name-product"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...</p>
                    <p id="price-product">price: <span id="number">12</span> </p>
                    <div class="container">
                        <input type="button" onclick="decrementValue()" value="-" class="button_increment" />
                        <input type="text" name="quantity" value="1"  size="1"  id="quantity" />
                        <input type="button" onclick="incrementValue()" value="+" class="button_increment"/>
                    </div>
                </div>
            </div>
            <div>
                <hr id="ligne-hr">
                <p>Subtotale Price :  <span id="number-Subtotale">12</span> </p></p>
            </div>
        </div>
        <hr id="solid">
        <div id="button-total">
            <div class="margin-button">
                <a href="">Proceed to Checkout</a>
            </div>
            <div class="margin-total">
                <p>TOTAL </p>
            </div>
        </div>
    </div>
        <script>
            function incrementValue()
                {
                    var value = parseInt(document.getElementById('quantity').value);
                    value = isNaN(value) ? 0 : value;
                    // if(value<100){
                        value++;
                            document.getElementById('quantity').value = value;
                    // }
                }
                function decrementValue()
                {
                    var value = parseInt(document.getElementById('quantity').value);
                    value = isNaN(value) ? 0 : value;
                    if(value>1){
                        value--;
                            document.getElementById('quantity').value = value;
                    }

                }
    </script>
    
    <!-- <script src="script.js"></script> -->
    <?php 
     include "footer.php";
    ?>  
    <!-- footer -->
</body>
</html>