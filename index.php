<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 * На базе реализованного вами кода сделайте простейшую (!)
админ-панель новостей с функциями добавления,
удаления и редактирования новости.
 */

require 'autoload.php';

//$db=new \app\db();
//создаем таблицу
//$db->execute("CREATE TABLE `test`.`Users` ( `id` SERIAL NOT NULL , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;");
//добавляем демо записи
//$db->execute("INSERT INTO `test`.`Users` (`id`, `name`, `email`) VALUES (NULL, 'вася', 'vas@vas.ru'), (NULL, 'петя', 'pet@vas.ru'), (NULL, 'вова', 'vova@vas.ru')");
//echo '<pre>';
//$user= new \app\Models\Users();
//$users = $user->findAll();
//echo \app\Models\Users::TABLE;
$user=new \app\Models\Users();

//$user=\app\Models\Users::findById(21);
//echo \app\Models\Users::delete(26);
//var_dump($user);
//$user[0]->name='newsexx88';
//$user[0]->email='new@sexnew88.ru';
//$user[0]->save();


//$news = new \app\Models\News;
//$news->insert();

$news = \app\Models\News::getLast();
include('templates/news.php');


//include('templates/plain.html');

//var_dump($news);
//$news = \app\Models\News::findById(2);
//var_dump($news);

$config = \app\Config::instance();

//$config->data['db']['host']='sex.com';
//$config->data['db']['brigs']='sex2.com';
//$config->saveConfig();

//$users = \app\Models\Users::findAll();

var_dump($config);
$users = \app\Models\Users::findAll();
include('templates/bootstrap.html');
//include('templates/user.html');
//var_dump($user);