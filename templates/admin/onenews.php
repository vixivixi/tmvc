<?php
///**
// * Created by PhpStorm.
// * User: vx
// * Date: 20.06.2016
// * Time: 14:54
// */

    echo "<h1>Редактируем новость:</h1>";
echo '<p>'.$this->new->header.'</p>';
     ?>
    <form action="" method="post">
        <input type="hidden" name='id' value="<?=$this->new->id?>"><br>
        <input type="text" name='header' value="<?=$this->new->header?>"><br>
        <input type="text" name='article' value="<?=$this->new->article?>"><br>
        <input type="text" name='author' value="<?=$this->new->author?>"><br>
        <input type="hidden" name='author_id' value="<?=$this->new->author_id?>"><br>
        <input type="submit" value="press me">
    </form>

<?
    echo "<hr>";