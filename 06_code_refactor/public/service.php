<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 17/02/2018
 * Time: 22:19
 */

$container['conn'] = function ($c){
    return new \Source\Conn($c['dsn'],$c['user'],$c['pass']);
};

$container['product'] = function ($c)
{
    return new \Source\Product($c['conn']);
};