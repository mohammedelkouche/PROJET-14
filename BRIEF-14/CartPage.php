<?php 
    session_start();
    // session_destroy();
    include "connexion.php";
    include "Navbar.php";
    $Shop = $_GET["id"];
    $query = "SELECT * FROM produit WHERE idProduit = $Shop ";
    $result = mysqli_query($conn,$query);
    if(isset($_POST["add_to_cart"])){
        // if($_SESSION["shopping cart"]){  
                $id = $_GET['id'];
 
                $_SESSION['cartArray'][$id] = array(
                    'pid' => $id ,
                    'pquantity' => $_POST['quantity']
                ) ;      
        // }   
    }
    if(isset($_GET['remove'])){
        $id = $_GET['remove'] ;
        unset($_SESSION['cartArray'][$id]);
        header("location:CartPage");
    }
    // echo "<pre>";
    // print_r($_SESSION['cartArray']);
    // echo "</pre>" ;
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <!-- navbar -->
    <div>
        <h1>Shopping Cart</h1>
    </div> 
    <div id="frame">   
        <?php 
            // $total_price = 0 ;
            foreach($_SESSION['cartArray'] as $key => $value ){
                $query = "SELECT * FROM produit WHERE idProduit = $key";
                $result = mysqli_query( $conn, $query) ;
                foreach( $result as $worth){
        ?>
        <div>
            <div id="frame-content">
                <div class="info">
                    <div class="clearfix">
                        <span><?php echo'<a href="?remove = '.$key.'"> DELETE</a> ';?></span>
                        <?php echo '<img class="card-img-top" src="' .'images/'.$worth['image'].'" alt="HTML5 Icon" width="150" height="150" >' ;?>
                    </div>
                    <div >
                        <p id="product-name"> <?php $worth['libelle'] ?>
                            <span>price: <?php echo $worth['prix'] ?></span><input type="hidden" class = "price" value="<?php echo $worth['prix'] ?>">
                        <!-- <p id="product_price">price: <span id="product-price-value"><?php// echo $worth['prix'] ?></span> </p> -->
                        <div class="container">
                            <input type="button" onclick="decrementValue()" value="-" class="button_increment" />
                            <input type="text" onchange="subtotal()" name="quantity" value="<?php echo $value['pquantity'] ?>"  size="1"  id="quantity" class="quantity" />
                            <input type="button" onclick="incrementValue()" value="+" class="button_increment"/>
                        </div>
                    </div>
                </div>
                <div>
                    <hr id="demarcation">
                    <p id="subtotal-price" >Subtotale Price :  <span id="subtotal-value" class="subtotalproducts"><?php // echo $value['pquantity'] * $worth['prix'] ?></span> 
                    <!-- </p id="subtotal-value">12</p> -->
                </div>
            </div>
        <?php
                // $total_price += ($value['pquantity'] * $worth['prix']) ; 
                        }
                    }
        ?> 
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
                    <p id="gtotal"> <?php //echo $total_price ?></p>
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