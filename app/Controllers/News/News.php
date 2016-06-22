<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 21.06.2016
 * Time: 20:03
 */

namespace app\Controllers\News;
use app\Exceptions\Core;
use app\Exceptions\Db;
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
//        echo 'Счетчик';
    }
    protected function actionIndex(){

        $this->view->news= \app\Models\News::findAll();
        $this->view->display(__DIR__ . '/../../../templates/news.php');
//        echo $view->render('templates/bootstrap.html');
//        var_dump($view);
    }
    protected function actiononenews(){
        $id=(int)$_GET['id'];
        $this->view->new=\app\Models\News::findById($id);
        var_dump($this->new);
        $this->view->display(__DIR__ . '/../../../templates/onenews.php');
//        var_dump($this->view->article);
    }
}