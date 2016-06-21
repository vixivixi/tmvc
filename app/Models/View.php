<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 21.06.2016
 * Time: 14:54
 */

namespace app\Models;


use app\Magic;

class View
{
    use Magic;

    public function display($template){
//        var_dump($this->render($template));
        echo $this->render($template);
    }
    public function render($template){
        ob_start();
        include $template;
        $content=ob_get_contents();
        ob_end_clean();
        $content=str_replace('@','@@',$content);
        return $content;
    }
}