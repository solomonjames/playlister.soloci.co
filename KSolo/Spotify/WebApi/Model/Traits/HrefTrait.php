<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait HrefTrait
{
    private $href;

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }
}
