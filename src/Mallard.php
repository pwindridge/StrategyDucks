<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 02/03/2017
 * Time: 10:39
 */

namespace StrategyDuck;


class Mallard extends Duck
{
    public function __construct() {
        $this->flyBehaviour = new Fly();
        $this->swimBehaviour = new Paddle();
        $this->quackBehaviour = new Quack();
    }

    public function display() {
        return "I'm a Mallard!";
    }
}