<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

ini_set('display_errors', true);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

require __DIR__ . '/../helper_functions.php';

$config = require __DIR__ . '/../config/web.php';
//dd([timestamp('1525392000')]);
function timestamp($time) {
    return date("N", $time);
}
(new yii\web\Application($config))->run();
