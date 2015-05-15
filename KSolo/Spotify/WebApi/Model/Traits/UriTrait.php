<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait UriTrait
{
    private $uri;

    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    public function getUri()
    {
        return $this->uri;
    }
}
