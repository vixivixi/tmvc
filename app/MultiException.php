<?php
/**
 * Created by PhpStorm.
 * User: vx
 * Date: 22.06.2016
 * Time: 18:46
 */

namespace app;


class MultiException
    extends \Exception
    implements \Iterator,\ArrayAccess
{
    use TCollection;
}