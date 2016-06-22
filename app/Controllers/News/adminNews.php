<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 21.06.2016
 * Time: 20:03
 */

namespace app\Controllers\News;
use app\Models\News;
use app\Models\View;
use app\MultiException;

class adminNews
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
        $this->view->display(__DIR__ . '/../../../templates/admin/news.php');
//        echo $view->render('templates/bootstrap.html');
//        var_dump($view);
    }
    protected function actionCreate(){
        
        try{
            $article = new \app\Models\News();
            $article->filll([]);
            $article->save();
        }catch (MultiException $e){
            echo '<pre>';
//            var_dump($e);
            $this->view->errors = $e;
        }
            echo 'Есть Ошибки';
        $this->view->display(__DIR__ . '/../../../templates/admin/create.php');
    }
    protected function actiononenews(){
        $id=(int)$_GET['id'];
        $this->view->new=\app\Models\News::findById($id);
        if($_POST){
            $post=$_POST;
            $this->view->new->fill($post);
            $this->view->new->save();
            echo 'Информация Обновлена';
//            die();
        }
//        var_dump($this->new);
        $this->view->display(__DIR__ . '/../../../templates/admin/onenews.php');
//        var_dump($this->view->article);
    }
}