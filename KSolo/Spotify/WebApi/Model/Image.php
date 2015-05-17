<?php

namespace KSolo\Spotify\WebApi\Model;

use JMS\Serializer\Annotation\Type;

/**
 * @see https://developer.spotify.com/web-api/object-model/#image-object
 */
class Image
{
    /**
     * @Type("integer")
     */
    private $height;

    /**
     * @Type("integer")
     */
    private $width;

    /**
     * @Type("string")
     */
    private $url;

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth()
    {
         return $this->width;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
