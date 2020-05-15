<?php

require('config/Router.php');
require('./vendor/autoload.php');
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new Router;
$router->run();

