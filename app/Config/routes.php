<?php

use \Controllers;

// Using this kind of setup, we can map routes to controller actions
$app['default.controller'] = $app->share(function() use ($app) {
    return new \Controllers\DefaultController($app);
});

// Home page
$app->get('/', 'default.controller:indexAction')->bind('home');

$app['auth.controller'] = $app->share(function() use ($app) {
    return new \Controllers\AuthController($app);
});

$app->get('/auth/spotify', 'auth.controller:spotifyAction')->bind('auth.spotify');
$app->get('/auth/callback', 'auth.controller:callbackAction')->bind('auth.callback');

return $app;
