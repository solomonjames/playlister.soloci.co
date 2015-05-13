<?php

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

/**
 * web/index.php
 *
 * Entry point of the application
 * Responsible for loading the app and running it
 */

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require __DIR__.'/../vendor/autoload.php';

// global app object, acts as a service container
$app = new Silex\Application();

// let's store the request object
$app['app.request'] = Request::createFromGlobals();

$configDirectory = __DIR__.'/../app/Config';

require_once $configDirectory.'/parameters.php';
require_once $configDirectory.'/services.php';
require_once $configDirectory.'/routes.php';

$app->run();
