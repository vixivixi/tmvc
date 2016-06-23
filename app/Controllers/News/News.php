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
use app\logger;
use app\Models\View;
use app\MultiException;

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

        try{
            $this->view->news= \app\Models\News::findAll();
            $this->view->display(__DIR__ . '/../../../templates/news.php');
        }catch(MultiException $e){
            $log=logger::instance();
            $this->view->errors=$e;
            foreach ($this->view->errors as $error):
            $log->log('time'.$error->getMessage());
            endforeach;
            $this->view->display(__DIR__ . '/../../../templates/admin/create.php');
        }

//        echo $view->render('templates/bootstrap.html');
//        var_dump($view);
    }
    protected function actiononenews(){
        try{
            $id=(int)$_GET['id'];
            $this->view->new=\app\Models\News::findById($id);
            var_dump($this->view->new);
            $this->view->display(__DIR__ . '/../../../templates/onenews.php');
        }catch(MultiException $e){
//            echo $e[0]->getMessage();
            $this->view->errors=$e;
            $log=logger::instance();
            foreach ($this->view->errors as $error):
                $log->log('time'.$error->getMessage());
            endforeach;
            $this->view->display(__DIR__ . '/../../../templates/admin/create.php');

//            echo 'sex';
        }

//        var_dump($this->view->article);
    }
}