<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 20.06.2016
 * Time: 14:54
 */
echo "<pre>";
//var_dump($news);
foreach ($this->errors as $error):
    ?>
<div class="alert-danger">
    <?=$error->getMessage()?>
</div>

<? endforeach; ?>
<hr>
