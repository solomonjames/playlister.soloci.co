<?php

// Controller Service Provider
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Twig
$app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../Resources/views']);

// Custom service example
$app['example_service'] = function() {
    return new \Services\ExampleService();
};

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Session Service Provider
$app->register(new Silex\Provider\SessionServiceProvider());
$app['session']->start();
