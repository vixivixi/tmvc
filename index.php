<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 */

require 'autoload.php';

//$db=new \app\db();
//создаем таблицу
//$db->execute("CREATE TABLE `test`.`Users` ( `id` SERIAL NOT NULL , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;");
//добавляем демо записи
//$db->execute("INSERT INTO `test`.`Users` (`id`, `name`, `email`) VALUES (NULL, 'вася', 'vas@vas.ru'), (NULL, 'петя', 'pet@vas.ru'), (NULL, 'вова', 'vova@vas.ru')");
echo '<pre>';
//$user= new \app\Models\Users();
//$users = $user->findAll();
//echo \app\Models\Users::TABLE;

$news = \app\Models\News::getLast();
include('template/news.php');

//var_dump($news);
//$news = \app\Models\News::findById(2);
//var_dump($news);


//$users = \app\Models\Users::findAll();

var_dump($users);
$user = \app\Models\Users::findById(2);
var_dump($user);