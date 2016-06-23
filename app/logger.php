<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 23.06.2016
 * Time: 14:09
 */

namespace app;


class logger
{
    use Singletone;
    protected $fname='log.log';
    protected function __construct(){
//        if(!is_file($this->fname))
//            fclose(fopen($this->fname,'a+'));
    }
    public function setLogName($name){
        $this->fname=$name;
    }
    public function log($message){
        file_put_contents($this->fname,$message.'\n',8);
    }
}