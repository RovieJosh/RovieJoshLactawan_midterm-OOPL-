<?php
abstract class PaymentMethod{
    protected $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    abstract public function processTransaction();
    
}

class CreditCard extends PaymentMethod{
    private $ccnumber;

    public function __construct($amount, $ccnumber){
        parent::__construct($amount);
        $this->ccnumber = $ccnumber;
    }

    public function processTransaction()
    {
        echo "Processed payment of PHP$this->amount from credit card #$this->ccnumber.  <br>";
    }
}

class GCash extends PaymentMethod{
    private $gnumber;

    public function __construct($amount, $gnumber){
        parent::__construct($amount);
        $this->gnumber = $gnumber;
    }

    public function processTransaction()
    {
        echo "Processed payment of PHP$this->amount from #$this->gnumber. <br>";
    }
}

class CashOnDelivery extends PaymentMethod{
    private $address;

    public function __construct($address, $amount){
        parent::__construct($amount);

        $this->address =$address;
    }

    public function processTransaction()
    {
        echo "COD at $this->address with a total of: PHP$this->amount. <br>";
    }
}

?>