<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 02/03/2017
 * Time: 10:44
 */

namespace StrategyDuck;


class Paddle implements ISwimBehaviour
{
    public function swim() {
        return "I'm paddling!";
    }
}