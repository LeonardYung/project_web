<?php

$_SERVER['SITE_ENV'] = (!isset($_SERVER['SITE_ENV'])) ? 'homestead' : $_SERVER['SITE_ENV'];
defined('YII_ENV') or define('YII_ENV', $_SERVER['SITE_ENV']);
defined('YII_ENV_PROD') or define('YII_ENV_PROD', 'production' === YII_ENV);
defined('YII_DEBUG') or define('YII_DEBUG', 'production' !== YII_ENV);

require(__DIR__ . '/../framework2/vendor/autoload.php');
require(__DIR__ . '/../framework2/vendor/yiisoft/yii2/Yii.php');

if (YII_ENV_PROD) {
    ini_set('display_errors', false);
    error_reporting(E_ERROR);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 0); //生产环境不需要trace level
} else {
    ini_set('display_errors', true);
    error_reporting(E_ALL);
}

phpinfo();