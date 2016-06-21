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
    public static function delete($id){
        $db = db::instance();
        $query = 'DELETE FROM '.static::TABLE .' WHERE id = '.$id.';';
        echo $query;

//        echo $query;
//        echo static::class;
        if ($db->execute($query)){
            return true;
        }else
            return false;
    }
    public function isNew(){
        return empty($this->id);
    }

    public function save(){
        if (empty($this->id))
            $this->insert();
        else
            $this->update($this->id);
    }
    public function createTable(){
        
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
            $sql='INSERT INTO '.static::TABLE." ($field) ".'VALUES'."($value)";
            $db=db::instance();
            $db->execute($sql,$values);
            //добавляем полученный индекс из базы
            $this->id = $db->getLastId();
            var_dump($this);
        }
    }
    public function update($id){
        if(!static::findById($id)){
            return;
        }
        else{

            $obj=static::findById($id);
            $arg=[];
            foreach($this as $k=>$v){
                if($k == 'id') continue;
                $arg[]="`$k`".' = '."'$v'";
            }
//            UPDATE Users SET email = new@andnew.ru,name = newone WHERE Users id = 27
//            UPDATE `Users` SET `name`='sex',`email`='sex@xse' WHERE `id` = 27
            $sql="UPDATE `".static::TABLE. "` SET ".implode (',',$arg)." WHERE ".'`id` = ' . $id;
            echo $sql;
//            die();
            $db=db::instance();
            try{
                $db->execute($sql);
            }catch (\PDOException $e){
                echo $e->getMessage();
            }


        }
    }
}