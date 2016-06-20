<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:57
 */
require 'autoload.php';
if($_GET){
    $news = \app\Models\News::findById($_GET['id']);
    include('template/news.php');
}
$db=new \app\db();