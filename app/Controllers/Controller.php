<?php

namespace Controllers;

class Controller
{
    protected $app;

    /**
     * Constructor
     */
    public function __construct($app)
    {
        $this->app = $app;
    }
}
