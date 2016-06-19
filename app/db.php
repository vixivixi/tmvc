<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:34
 */

namespace app;


class db
{
    private $dbh;
    public function __construct()
    {
        $this->dbh  = new \PDO('mysql:host=localhost;dbname=test','root','');
    }
    public function execute($sql){
        $stmt=$this->dbh->prepare($sql);
        $res=$stmt->execute(); //true or false
        return $res;
    }
    public function query($sql){
        $stmt=$this->dbh->prepare($sql);
        $res=$stmt->execute(); //true or false
        if(false !== $res){
            return $stmt->fetchAll();
        }
        return [];
    }
}