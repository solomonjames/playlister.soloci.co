<?php

use \Controllers;

// Using this kind of setup, we can map routes to controller actions
$app['default.controller'] = $app->share(function() use ($app) {
    return new \Controllers\DefaultController($app);
});

// Home page
$app->get('/', 'default.controller:indexAction');

return $app;
