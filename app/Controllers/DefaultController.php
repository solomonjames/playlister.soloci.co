<?php

namespace Controllers;

class DefaultController extends Controller
{
    use \Session\SessionTrait;

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
