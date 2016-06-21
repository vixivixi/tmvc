<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:54
 */

    echo "<h1><a href=index.php?action=one&id=".$this->new->id.">".$this->new->header."</a></h1>";
//var_dump($this->new->article);
//var_dump($this->new->article);
    echo '<p>';
    echo $this->new->article;
    echo '<p>';
    echo $this->new->timestamp;
    echo '<p>';
    echo $this->new->author;
    echo "<hr>";