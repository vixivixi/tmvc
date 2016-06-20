<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:01
 * 4. Сделайте таблицу новостей.
 * Добавьте в нее 3-4 новости. На главной странице сайта (index.php)
 * сделайте вывод 3 последних новостей.
 * Используйте модель News для получения данных
 * (возможно, вам придется добавить какой-то еще метод в эту модель).
 * Для передачи данных в шаблон - просто include файла с шаблоном.
 * 5. Каждая новость на главной странице должна быть снабжена ссылкой 
 * на страницу article.php?id=NNN, где NNN - номер этой новости. Разработайте полностью страницу article.php
 *
 *
 */

namespace app\Models;

use app\Model;

class News extends Model
{
    const TABLE = 'News';
    public $header,$article,$author,$timestamp;
    
    public static function getLast(){
        $findAll = parent::findAll();
        $i=1;
        foreach($findAll as $obj){
            $res[]=$obj;
            $i++;
            if($i > 3) break;
        }
        return $res;
    }
}