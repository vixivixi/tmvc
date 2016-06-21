<?php
///**
// * Created by PhpStorm.
// * User: vx
// * Date: 21.06.2016
// * Time: 16:55
// */

namespace app;


trait Magic
{
    protected $data=[];
    public  function __set($k,$v){
        $this->data[$k]=$v;
    }
    public  function __get($k){
        return $this->data[$k];
    }
    public  function __isset($k){
        if($this->data[$k])
            return true;
        return false;
    }


}