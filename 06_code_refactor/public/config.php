<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 17/02/2018
 * Time: 22:30
 */

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:localhost;dbname=teste_oo";
$container['user'] = "root";
$container['pass'] = "";