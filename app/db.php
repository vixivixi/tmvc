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
    public function execute($sql,$arg=[]){
        $stmt=$this->dbh->prepare($sql);

        $place_holders = implode(',', array_fill(0, count($arg), '?'));

        $res=$stmt->execute($arg); //true or false
        return $res;
    }
    public function query($sql, $class,$arg=[]){
        $stmt=$this->dbh->prepare($sql);

        $place_holders = implode(',', array_fill(0, count($arg), '?'));

        $res=$stmt->execute($arg); //true or false
        if(false !== $res){
            return $stmt->fetchAll(\PDO::FETCH_CLASS,$class);
        }
        return [];
    }
}