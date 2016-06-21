<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:57
 */
require 'autoload.php';

if($_GET){
    $controller=new \app\Controllers\News();
    $controller->action('One');
}

//$db=new \app\db();