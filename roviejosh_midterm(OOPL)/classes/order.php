<?php 

include('connection.php');
$GLOBALS['connection'] = $connection;



class Order{
    private $connect;
    function __construct()
    {
        $this->connect = $GLOBALS['connection'];
    }

    function viewOrder($orderid){
        $order = $this->connect->query("SELECT * FROM `cart` WHERE order_id = $orderid")->fetch_all(MYSQLI_ASSOC);
        return $order;
    }

    function setOrderDetails($orderid, $first_name, $last_name, $contact_num, $address){
        $details = $this->connect->query("UPDATE `orders` SET `first_name`='$first_name',`last_name`='$last_name',`contact_num`='$contact_num',`address`='$address' WHERE order_id = $orderid");
        return $details;
    }

    function getTotalAmount($orderid){
        $tot = $this->connect->query("SELECT `totalamount` FROM `orders` WHERE order_id = $orderid ");
        return $tot;
    }


    
}




?>