<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 13:13
 */
require '../autoload.php';
$db=new \app\db();
$arg[]='вася';
//$db->execute("INSERT INTO `test`.`Users` (`name`, `email`) VALUES ('вася', 'vas@vas.ru'), ('петя', 'pet@vas.ru'), ('вова', 'vova@vas.ru')");
assert($db->execute('SELECT * FROM USERS'),'не прошла проверка на вставку с пустым аргументом');
echo '<pre>';
assert($db->query('SELECT * FROM USERS', '\app\Models\Users'));
//var_dump($db->query('SELECT * FROM USERS', '\app\Models\Users'));