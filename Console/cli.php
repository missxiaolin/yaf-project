<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/10/20
 * Time: 下午2:46
 */

require __DIR__ . '/../vendor/autoload.php';

define('ROOT_PATH', dirname(dirname(__FILE__)));
define('APP_PATH', ROOT_PATH . '/application');
define('CONF_PATH', ROOT_PATH . '/conf');
define('LOG_PATH', ROOT_PATH . '/log');
define('DATA_PATH', ROOT_PATH . '/data');
define('THIRD_PATH', ROOT_PATH . '/thirdparty');
define('TPL_PATH', APP_PATH . '/views');

$application = new Yaf_Application( CONF_PATH . "/application.ini");
$application->bootstrap();
$application->getDispatcher()->dispatch(new Yaf_Request_Simple());
$application->run();