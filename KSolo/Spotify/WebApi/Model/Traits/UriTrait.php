<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait UriTrait
{
    /**
     * @Type("string")
     */
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
