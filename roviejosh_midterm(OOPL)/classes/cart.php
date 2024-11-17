<?php
require_once('connection.php');
$GLOBALS['connect'] = $connection;


class Cart {
    private $db;
    private $orderid;
    private $totalamount;

    function __construct(){
        $this->db = $GLOBALS['connect'];
    }


    function viewCart($orderid){
        $cart = $this->db->query("SELECT * FROM `cart` WHERE order_id = $orderid")->fetch_all(MYSQLI_ASSOC);
        return $cart;
    }

    function totalAmount($orderid){
        $totalamount = 0;
        $query = "SELECT * FROM `cart` WHERE order_id = '$orderid'";
        $res = mysqli_query($this->db, $query);

        while ($item = mysqli_fetch_assoc($res)){
            $totalamount += $item['quantity'] * $item['price'];
        }
        return $totalamount;
    }

    function removeItem($cartid){
        $cart2 = $this->db->query("DELETE FROM `cart` where cart_id = $cartid");
        return $cart2;
    }
}
?>