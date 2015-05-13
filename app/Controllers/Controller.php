<?php

namespace Controllers;

class Controller
{
    private $app;

    /**
     * Constructor
     */
    public function __construct($app)
    {
        $this->app = $app;
    }
}
