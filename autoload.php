<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 */
function __autoload($class){
    $path=__DIR__.'/classes/'.str_replace('\\','/',$class).'.php';
    require $path;
}