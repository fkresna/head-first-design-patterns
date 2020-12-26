<?php

include_once 'Duck.php';
include_once 'QuackClass.php';
include_once 'FlyWithWings.php';

class MallardDuck extends Duck
{

    function __construct()
    {
        $this->quackBehavior = new QuackClass();
        $this->flyBehavior = new FlyWithWings();
    }

    function display()
    {
        echo "I'm a real Mallard Duck \n";
    }
}
