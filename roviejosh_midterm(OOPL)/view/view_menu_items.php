<?php
 include('../classes/connection.php');
 include('../classes/menu_items.php');
 include('../classes/cart.php');

 $order_id = $_GET['orderid'];
 $user = $_GET['user'];
 $userId = $_GET['id'];

 if (isset($_POST['addToCart'])){
    if ($_POST['quantity'] > 0){
        $item_name = $_POST['item_name'];
        $item_price = $_POST['item_price'];
        $quantity = $_POST['quantity'];

        $addquery = $connection->query("INSERT INTO `cart`(`order_id`,`name`, `quantity`, `price`) VALUES ('$order_id','$item_name','$quantity','$item_price')");
    } else {
        echo '<script>alert("Quantity cannot be zero.");</script>';
    }
    
 }

        if (isset($_POST['view_cart'])){
            header("Location: /roviejosh_midterm(OOPL)/view/view_cart.php?user=$user&id=$userId&orderid=$order_id");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #eee2dc;
        }
        .header{
            color:white;
            display:flex;
            justify-content: space-between;
            background-color: #ac3b61;
            padding: 1rem;
        }

        .container{
            margin-left: 125px;
            padding-bottom: 3rem;
        }

        .col{
            display: flex;
            flex-wrap: wrap;
        }

        .card{
            margin-right: 4rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .card-body{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }

        .card-img-top{
            width: 100%;               
            height: 200px;            
            object-fit: cover;         
            display: block;  
        }

        .card-title{
            font-size: 18pt;
            color: black;
            text-transform: uppercase;
        }
        .card-text, .card-title{
            margin: 0;
        }

        .card-text{
            font-weight:bold;
            font-size:12pt;
        }

        #quanti{
            text-align: center;
            height:20px;
            width:200px;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            opacity: 1; 
            display: inline; 
        }

        h2{
            text-align: center;
            font-size: 50pt;
            padding: 15px;
        }

        #addtocart{
            height: 30px;
            width: 200px;
            background-color: white; 
            color: #ac3b61;
            border:1px #ac3b61;
        }

        #addtocart:hover{
            background-color: #ac3b61;
            color: white;
            font-weight: bolder;
        }

        


    </style>
</head>
<body class="">
<div class="header">
        <p style="font-size: 24pt; padding-left: 2rem;">SwiftOrder</p>
        <form method="POST">
        <!-- <button type="submit" name="view_cart" id="viewcart">CART</button> -->
        <button type="submit" name="view_cart" style="background: none; border: none; cursor: pointer;">
            <i class="fas fa-shopping-cart" style="font-size: 30px; color: white; padding-right: 25px"></i>
        </button>
    </form>
    </div>

    <h2>Menu</h2>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    $items = new MenuItems();
                    $menu_items = $items->viewMenu();
                    foreach($menu_items as $key => $value){
                    echo '
                    <form method="POST" autocomplete="off">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img class="card-img-top" src="..' . $value['imagelink'] .  '" alt="Card image cap">
                                <p class="card-title">'. $value['name'] . '</p>
                                <p class="card-text"> PHP'. $value['price'] . '</p>
                                <input type="number" name="quantity" value="0"  min="0" id="quanti">
                                <input type="hidden" name="item_name" value="'. $value['name'] . '">
                                <input type="hidden" name="item_price" value="'. $value['price'] . '">
                                <input name="addToCart" class="btn" type="submit" value="ADD TO CART" id="addtocart">
                            </div>
                        </div>
                    </form>';
                    }                
                ?>
            </div>
        </div>
    </div>

</body>

<script>

</script>
</html>