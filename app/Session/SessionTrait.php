<?php

namespace Session;

trait SessionTrait
{
    public function session()
    {
        return $this->app['session'];
    }

    public function user()
    {
        return $this->session()->get('userInfo');
    }
}
