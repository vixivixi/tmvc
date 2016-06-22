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

use app\db;
use app\Magic;
use app\Model;
use app\MultiException;

class News extends Model
{
//    use Magic;
    const TABLE = 'News';
    public $header,$article,$author_id,$timestamp;
    
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

    /**
     * LAZY LOAD
     * @param $k
     * @return $string
     */

    public function __get($k){
//        echo 'получаем параметр: '.$k.' сверяем с параметром '.$this->author_id.var_dump(Authors::findById($this->author_id));
        switch($k){
            case 'author':
                return Author::findById($this->author_id)->name;
            break;
            default:
                return NULL;
        }
//        if($k=='author'){
//            if ($this->author_id){
//                    $author=Author::findById($this->author_id);
//                if($author[0]->name)
//                return $author[0]->name;
//                return 'does not exist';
//            }else{
//                return 'no author';
//            }
//        }
//        return $this->data[$k];
    }

    public function __isset($k)
    {
//        echo 'получаем параметр: '.$k.' сверяем с параметром '.$this->author_id.var_dump(Authors::findById($this->author_id));
        switch ($k) {
            case 'author':
                return true;
                break;
            default:
                return NULL;
        }
    }
    public function filll($arr){
        $e = new MultiException();
        if (true){
            $e[] = new \Exception('Заголовок не правильный');
        }

        if (true){
            $e[] = new \Exception('Текст не правильный');
        }
        throw $e;
    }
    public function fill($post){

        $this->article=$post['article'];
        $this->header=$post['header'];
        $this->author_id=$post['author_id'];
        $this->id=$post['id'];
    }
}