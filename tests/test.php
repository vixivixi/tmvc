<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 13:13
 */
require '../autoload.php';
$col=new \app\Collection();
$col[]=1;
$col[]=1;
$col[]=1;

echo 'pez';
var_dump($col);
foreach($col as $key => $val){
//    echo '\n';
    echo $key.'~'.$val.'<br>';
}


//$db=new \app\db();
//создаем таблицу для
//$db->setDebug();

try{
//    $db->execute('CREATE TABLE `test`.`News` ( `id` SERIAL NOT NULL , `header` VARCHAR(150) NOT NULL , `article` VARCHAR(1024) NOT NULL , `author` INT NOT NULL , `timestamp` TIMESTAMP NOT NULL ) ENGINE = InnoDB;');
}
catch (Exception $e){
    echo $e->getMessage();
}

try{
//    $db->execute("INSERT INTO `test`.`News` ( `header` , `article` , `author` ) VALUES ('Новость 3','Текст 3ей Новости', 1), ('Новость 4','Текст 4й Новости',2);");
}
catch (Exception $e){
    echo $e->getMessage();
}


//$arg[]='вася';

//$db->execute("INSERT INTO `test`.`Users` (`name`, `email`) VALUES ('вася', 'vas@vas.ru'), ('петя', 'pet@vas.ru'), ('вова', 'vova@vas.ru')");
//$db->execute("DELETE FROM `test`.`Users` WHERE id = 16");
//assert($db->execute('SELECT * FROM USERS'),'не прошла проверка на вставку с пустым аргументом');
echo '<pre>';
//assert($db->query('SELECT * FROM USERS', '\app\Models\Users'));
echo 'sex';
//assert(\app\Models\Author::findAll());
$user= \app\Models\Author::findById(1);
var_dump($user);

//var_dump($db->query('SELECT * FROM USERS', '\app\Models\Users'));