<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 15:22
 */

namespace app;


Class Config
{
    use Singletone;
    public $data=[];
    protected $fname='config.ini';
    protected $configfile;

    protected function __construct(){
        if(!is_file($this->fname))
            fclose(fopen($this->fname,'a+'));
        $this->data = unserialize(file_get_contents($this->fname));
        echo $this->fname;
        var_dump($this->configfile);
    }
    public function saveConfig(){
        file_put_contents($this->fname,serialize($this->data));
    }



}