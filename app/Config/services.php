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

$app->register(new Silex\Provider\SerializerServiceProvider());

// Session Service Provider
$app->register(new Silex\Provider\SessionServiceProvider());
$app['session']->start();

\Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation', __DIR__.'/../../vendor/jms/serializer/src'
);

$app['jms.serializer'] = function() {
    return \JMS\Serializer\SerializerBuilder::create()
        //->setCacheDir(sys_get_temp_dir())
        ->setDebug(true)
        ->build();
};
