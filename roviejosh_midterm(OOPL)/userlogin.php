<?php
include('../roviejosh_midterm(OOPL)/classes/connection.php');
include('../roviejosh_midterm(OOPL)/classes/customer.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $customer = new Customer($username, $password);
    $user = $customer->login();

    if($user){
        $userId = $user['id']; 
        header("Location: /roviejosh_midterm(OOPL)/view/view_restaurant.php?user=$username&id=$userId");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwiftOrder Log in</title>
    <link rel="stylesheet" href="../roviejosh_midterm(OOPL)/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div>
        <h1 id="userHeader">SwiftOrder</h1>
        <h5 id="userSubHead">Your Order, Just a Click Away</h5>
    </div>


   <div class="container">
        <form method="post" class="userLogin">
            <div>
                <label for="username" style="color: #123c69; font-size: large">Enter username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="password" style="color: #123c69; font-size: large; margin-top:5px;">Enter password </label>
                <input type="password" name="password">
            </div>
            <div>
                <button class="btn" type="submit" name="login" id="loginButton">Login</button>
            </div>
        
        </form>
   </div>
</body>
</html>