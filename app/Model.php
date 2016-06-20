<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.06.2016
 * Time: 1:09
 */

namespace app;


abstract class Model
{
    const TABLE='';

    public static function findAll(){
        $db = new db();
        echo 'SELECT * FROM '.static::TABLE;
        echo static::class;
        return $db->query(
            'SELECT * FROM '.static::TABLE,
            static::class
        );

    }
    public static function findById($id){
        $db = new db();
        $query = 'SELECT * FROM '.static::TABLE .' WHERE id = '.$id.';';
//        echo $query;
//        echo static::class;
        if (count($db->query($query,static::class))){
            return $db->query(
                $query,
                static::class
            );
        }else
            return false;
    }
}