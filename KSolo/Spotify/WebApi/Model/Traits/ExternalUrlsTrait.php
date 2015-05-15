<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait ExternalUrlsTrait
{
    private $externalUrls = array();

    public function setExternalUrls(array $externalUrls)
    {
        $this->externalUrls = $externalUrls;
        return $this;
    }

    public function getExternalUrls()
    {
        return $this->externalUrls;
    }
}
