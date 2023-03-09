<?php


use capcha\src\CapchaException;

if (!function_exists('capcha_create')) {
    function capcha_create($code = null)
    {
        try {
            /*执行主体*/
            return (new \capcha\src\Code())->imgCode($code);

        } catch (\Exception $e) {
            throw new CapchaException($e->getMessage());
        }
    }
}

if (!function_exists('capcha_check')) {
    function capcha_check(string $verify_id,string  $verify_code)
    {
        try {
            /*执行主体*/
            return (new \capcha\src\Code())->imgCode($verify_id);

        } catch (\Exception $e) {
            throw new CapchaException($e->getMessage());
        }
    }
}
