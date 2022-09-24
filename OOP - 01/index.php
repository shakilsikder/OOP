<?php

class BMW {
    // Properties
    public $brack  = 4;
    public $hendel = 1;

    function __construct($one, $two) {
        $this->brack  = $one;
        $this->hendel = $two;
    }

    // Method
    function car() {
        $result = $this->brack + $this->hendel;
        return $result;
        echo $result;
    }
  
}

$obj = new BMW(10, 15);
echo $obj->car();
echo ' <=> ';

$objOne = new BMW(35, 15);
echo $objOne->car();




?>