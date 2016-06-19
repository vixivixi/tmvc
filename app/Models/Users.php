<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.06.2016
 * Time: 0:17
 */

namespace app\Models;


use app\db;

class Users
{
    public $email,$name;
    public static function findAll(){
        $db = new db();
        return $db->query(
            'SELECT * FROM Users',
            'app\Models\Users'
         );

    }
}