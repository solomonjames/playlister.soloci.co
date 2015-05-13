<?php

namespace Controllers;

class DefaultController extends Controller
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->app['twig']->render('home.twig', [
            'message' => 'poop'
        ]);
    }
}
