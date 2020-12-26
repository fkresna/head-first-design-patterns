<?php
include 'ModelDuck.php';
include 'MallardDuck.php';
include 'FlyRocketPowered.php';

class MiniDuckSimulator
{
    function run() {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();

        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();

    }
}

$simulator = new MiniDuckSimulator();
$simulator->run();
