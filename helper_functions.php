<?php

//use yii\helpers\VarDumper;
use Symfony\Component\VarDumper\VarDumper;


if (!function_exists('var_dumps')) {

    function var_dumps($args) {

//        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();
        VarDumper::dump($args);
    }

}

if (!function_exists('var_dumps_exit')) {

    function var_dumps_exit($args) {

//        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();
        var_dumps($args);
        exit;
    }

}

if (!function_exists('dd')) {

    function dd($args) {

//        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();

        var_dumps_exit($args);
        exit;
    }

}


if (!function_exists('ajax_var_dumps')) {

    function ajax_var_dumps($args) {

        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();
        echo '<pre>';
        var_dump($args);
    }

}

if (!function_exists('ajax_var_dumps_exit')) {

    function ajax_var_dumps_exit() {

        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();
        ajax_var_dumps($args);
        exit;
    }

}

if (!function_exists('ajax_dd')) {

    /**
     * @param $args
     */
    function ajax_dd($args) {

        $args = func_num_args() === 1 ? array_shift(func_get_args()) : func_get_args();
        ajax_var_dumps($args);
        exit;
    }

}
