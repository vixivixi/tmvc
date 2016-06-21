<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.06.2016
 * Time: 0:17
 */

namespace app\Models;
    use app\Model;

class Users extends Model
{
//    public static $table='Users';
    const TABLE='Users';
    public $email,$name;
}