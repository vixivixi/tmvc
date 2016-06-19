<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.06.2016
 * Time: 1:09
 */

namespace app;


class Model
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
}