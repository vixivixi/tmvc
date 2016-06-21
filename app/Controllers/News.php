<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 21.06.2016
 * Time: 20:03
 */

namespace app\Controllers;


use app\Models\View;

class News
{
    protected $view;
    public function __construct()
    {
        $this->view=new View();
    }
    public function action($action){
        $methodAction='action'.$action;
        $this->beforeAction();
        return $this->$methodAction();
    }
    protected function beforeAction(){
        echo 'Счетчик';
    }
    protected function actionIndex(){

        $this->view->users= \app\Models\User::findAll();
        $this->view->display('templates/bootstrap.html');
//        echo $view->render('templates/bootstrap.html');
//        var_dump($view);
    }
}