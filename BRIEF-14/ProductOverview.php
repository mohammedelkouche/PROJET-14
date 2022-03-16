<?php
    session_start();
    include "connexion.php";
    $Shop=$_GET["id"];
    $query = "SELECT * FROM produit WHERE idProduit = $Shop ";
    $result = mysqli_query($conn,$query);
    // if(isset($_POST["add_to_cart"])){

        // if($_SESSION["shopping cart"]){

                // $_SESSION['idP'] = $_GET['id'];
                // $_SESSION['Pquantity'] = $_POST['quantity'];
                // $cartArray = array(
                //     'id' => $_SESSION['idP'],
                //     'quantity'=> $_SESSION['Pquantity']
                // ) ;
                // $_SESSION["shopping cart"]
                // echo "<pre>";
                // print_r($cartArray );
                // echo "</pre>" ;           
        // }   
        
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleProductOverview.css">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "Navbar.php";

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result) ;
            echo' 
            <form action = "CartPage.php?id='.$row['idProduit'].'" enctype="multipart/form-data" method = "POST">
                <div id="frame">
                    <div id="descreption-quantite-button" class="flex-div">
                        <h1>Exfoliating Soap</h1>
                        <div id="product-descreption">
                            
                            <p id="descriprtion">'.$row["description"].'</p> 
                                <div id="quantite-button"> 
                                    <div> 
                                            <label for="">SELECT QUANTITY</label>
                                        <div class="input">
                                            <input type="button" class="crementation" onclick="decrementValue()" value="-" " />
                                            <input type="number" name="quantity" value="1"  size="1"  id="quantity" />
                                            <input type="button" class="crementation" onclick="incrementValue()" value="+" "/>
                                        </div>
                                    </div>
                                    <div id="button-addtocart">
                                        <input type="submit" id="button-add" name="add_to_cart" value = "ADD TO CART">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div id="div-img" class="flex-div">
                        <img class="card-img-top" src="'.'images/'.$row["image"].'" alt="HTML5 Icon" style="width:90%"  >
                    </div>
                </div>
            </form>
            ' ;
          }
        ?>     
            <script src="script.js"></script>
    <?php 
     include "footer.php";
    ?> 
    <!-- <a href="CartPage.php">ADD TO CART</a> -->
    <!-- <img src="image/test-photo.jpg" alt="" width="300" height="300"> -->
</body>
</html>
<input type="button">