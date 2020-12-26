<?php
include 'Duck.php';
include 'FlyNoWay.php';

class ModelDuck extends Duck
{
    function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
    }

    function display()
    {
        echo "I'm a model duck \n";
    }
}
