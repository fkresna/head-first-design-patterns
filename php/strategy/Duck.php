<?php

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    function __construct()
    {
    }

    abstract function display();

    function setFlyBehavior(FlyBehavior $flyBehavior) {
        $this->flyBehavior = $flyBehavior;
    }

    function performFly() {
        $this->flyBehavior->fly();
    }

    function performQuack() {
        $this->quackBehavior->quack();
    }

}
