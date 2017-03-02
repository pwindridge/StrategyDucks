<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 02/03/2017
 * Time: 10:46
 */

namespace StrategyDuck;


class Fly implements IFlyBehaviour
{
    public function fly() {
        return "I'm flapping my wings and flying!";
    }
}