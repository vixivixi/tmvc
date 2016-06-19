<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 */

require 'autoload.php';

$db=new \app\db();
$res = $db->execute('CREATE TABLE foo (id SERIAL)');
var_dump($res);