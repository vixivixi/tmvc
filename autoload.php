<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 */
function vixiload($class){
    $path=__DIR__.'/'.str_replace('\\','/',$class).'.php';
    require $path;
}
spl_autoload_register('vixiload');