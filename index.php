<?php
require 'vendor/autoload.php';
date_default_timezone_set ("Asia/Kolkata");
//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));
//$log->addWarning('Foo');

 $app = new \Slim\Slim();
$app->get('/', function () {
    echo "Hello, ";
});
$app->run();
?>