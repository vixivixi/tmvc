<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 15:22
 */

namespace app;


trait Singletone
{
    static $instance;
    protected function __construct(){

    }
    static function instance(){
        if(null == static::$instance)
            static::$instance = new static;
        return static::$instance;
    }
}