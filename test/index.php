<?php
/**
 * Created by : PhpStorm
 * Web: https://www.kaadon.com
 * User: ipioo
 * Date: 2022/1/11 00:00
 */

use zhang003\imgcode\Code;

require_once "vendor/autoload.php";

try {

    /*执行主体*/
    (new Code())->imgCode();
} catch (\Exception $e) {
    var_dump($e->getTrace());
}