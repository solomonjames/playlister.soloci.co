<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait ImagesTrait
{
    /**
     * @Type("array<KSolo\Spotify\WebApi\Model\Image>")
     */
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
