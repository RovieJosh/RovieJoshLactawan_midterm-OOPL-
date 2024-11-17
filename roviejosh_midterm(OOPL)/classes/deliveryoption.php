<?php 

class DeliveryMode{
    protected $deliveryTime;
    protected $deliveryfee;

    public function __construct($deliveryTime, $deliveryfee){
        $this->deliveryTime = $deliveryTime;
        $this->deliveryfee = $deliveryfee;
    }
}

class DeliveryVehicle extends DeliveryMode{

    public function __construct($deliveryTime = '35 minutes', $deliveryfee = 40){
        parent::__construct($deliveryTime, $deliveryfee);

    }

    public function getDeliveryTime(){
        echo "Delivery Vehicle - ETA: $this->deliveryTime <br>";
        echo '<br>';
    }

    function getFee(){
        return $this->deliveryfee;
    }

}

class BikeDelivery extends DeliveryMode {
    public function __construct($deliveryTime = '25 minutes', $deliveryfee = 20){
        parent::__construct($deliveryTime, $deliveryfee);
    }

    public function getDeliveryTime(){
        echo "Bike Delivery - ETA: $this->deliveryTime <br>";
        echo '<br>';
        echo '<br>';
    }

    function getFee(){
        return $this->deliveryfee;
    }
}
?>