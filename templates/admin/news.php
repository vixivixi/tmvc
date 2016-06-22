<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:54
 */
echo "<pre>";
//var_dump($news);
foreach ($this->news as $new){
//    var_dump($new);
    echo "<h1><a href='/admin/news/news/onenews/$new->id'>$new->header</a></h1>";
    echo "<p>$new->article</p>";
    echo "<p>$new->timestamp</p>";
    echo "<p>$new->author</p>";
    echo "<hr>";
}