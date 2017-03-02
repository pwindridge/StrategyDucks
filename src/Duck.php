<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 02/03/2017
 * Time: 10:32
 */

namespace StrategyDuck;


abstract class Duck
{
    protected $flyBehaviour, $quackBehaviour, $swimBehaviour;

    public function performQuack() {
        return $this->quackBehaviour->quack();
    }

    public function performFly() {
        return $this->flyBehaviour->fly();
    }

    public function performSwim() {
        return $this->swimBehaviour->swim();
    }

    abstract function display();
}