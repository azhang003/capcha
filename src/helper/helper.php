<?php


if (!function_exists('capcha_create')) {
    function capcha_create($config = null)
    {
        try {
            /*执行主体*/
            return (new zhang003\imgcode\Code())->imgCode(111);

        } catch (\Exception $e) {
            throw new zhang003\imgcode\CapchaException($e->getMessage());
        }
    }
}

if (!function_exists('capcha_check')) {
    function capcha_check(string $verify_id,string  $verify_code)
    {
        try {
            /*执行主体*/
            return (new zhang003\imgcode\Code())->check($verify_id, $verify_code);

        } catch (\Exception $e) {
            throw new zhang003\imgcode\CapchaException($e->getMessage());
        }
    }
}
