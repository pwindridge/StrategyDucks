<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 02/03/2017
 * Time: 10:48
 */

namespace StrategyDuck;


class Quack implements IQuackBehaviour
{
    public function quack() {
        return "Quack! Quack!";
    }
}