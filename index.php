<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.06.2016
 * Time: 23:28
 */

require 'autoload.php';

$db=new \app\db();
//создаем таблицу
//$db->execute("CREATE TABLE `test`.`Users` ( `id` SERIAL NOT NULL , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;");
//добавляем демо записи
//$db->execute("INSERT INTO `test`.`Users` (`id`, `name`, `email`) VALUES (NULL, 'вася', 'vas@vas.ru'), (NULL, 'петя', 'pet@vas.ru'), (NULL, 'вова', 'vova@vas.ru')");
echo '<pre>';
$data = $db->query('SELECT * from Users','app  \Models\Users');
var_dump($data  );