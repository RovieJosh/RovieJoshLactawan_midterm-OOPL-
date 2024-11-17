<?php

include ('../classes/connection.php');


if (isset($_POST['menu_page'])){
    $username = $_GET['user'];
    $userId = $_GET['id'];

    $result = $connection->query("INSERT INTO `orders` (`user_id`) VALUES ('$userId')");

    if ($result) {
        $orderId = $connection->insert_id;
        header("Location: /roviejosh_midterm(OOPL)/view/view_menu_items.php?user=$username&id=$userId&orderid=$orderId"); 
        exit;
    } else {
        echo "Error: " . $connection->error;
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwiftOrder</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        body{
            background-color: #eee2dc;    
            margin: auto;
            color: #ac3b61;
            text-align: center;
            margin-top: 30vh;
          
        }
    </style>
</head>
<body>
    <div class="container-fluid p-5">
        <h1 id="welcome">Welcome to SwiftOrder</h1>
        <form method="POST">
        <button  class="btn btn-primary" id="orderHere" name="menu_page" type="submit">ORDER HERE</button>
        </form>
        
    </div>


    <script>

    </script>
</body>
</html>