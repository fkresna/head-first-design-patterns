<?php

include_once 'QuackBehavior.php';

class QuackClass implements QuackBehavior
{
    function quack() {
        echo "Quack \n";
    }
}
