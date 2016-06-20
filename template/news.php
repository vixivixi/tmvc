<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:54
 */

foreach ($news as $new){
    echo "<h1><a href='article.php?id=$new->id'>$new->header</a></h1>";
    echo "<p>$new->article</p>";
    echo "<p>$new->timestamp</p>";
    echo "<hr>";
}