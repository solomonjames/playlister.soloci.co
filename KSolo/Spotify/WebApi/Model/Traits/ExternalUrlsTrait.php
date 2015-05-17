<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait ExternalUrlsTrait
{
    /**
     * @Type("array<string, string>")
     */
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

    public function getSpotifyUrl()
    {
        return $this->hasSpotifyUrl() ? $this->externalUrls['spotify'] : null;
    }

    public function hasSpotifyUrl()
    {
        return isset($this->externalUrls['spotify']);
    }
}
