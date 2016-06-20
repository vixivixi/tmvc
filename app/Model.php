<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.06.2016
 * Time: 1:09
 */

namespace app;


abstract class Model
{
    const TABLE='';
    public $id;
    public static function findAll(){
        $db = db::instance();
        echo 'SELECT * FROM '.static::TABLE;
        echo static::class;
        return $db->query(
            'SELECT * FROM '.static::TABLE,
            static::class
        );

    }
    public static function findById($id){
        $db = db::instance();
        $query = 'SELECT * FROM '.static::TABLE .' WHERE id = '.$id.';';
//        echo $query;
//        echo static::class;
        if (count($db->query($query,static::class))){
            return $db->query(
                $query,
                static::class
            );
        }else
            return false;
    }
    public function isNew(){
        return empty($this->id);
    }
    public function insert(){
        if(!$this->isNew()){
            return;
        }
        else{
            $columns=[];
            foreach($this as $k=>$v){
                if($k == 'id') continue;
                $columns[] = $k;
                $values[':'.$k] = $v;
            }
            $field=implode(',',$columns);
            $value=implode(',',array_keys($values));
//            $values=':'.implode(',:',$columns);

            $sql='INSERT INTO '.static::TABLE." ($field) ".'VALUES'."($value)";
            $db=db::instance();
            $db->execute($sql,$values);
        }
    }
}