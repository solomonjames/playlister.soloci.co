<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait ImagesTrait
{
    private $images = array();

    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }
}
