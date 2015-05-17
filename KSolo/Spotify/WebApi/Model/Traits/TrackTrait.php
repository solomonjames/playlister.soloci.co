<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait TrackTrait
{
    /**
     * @Type("KSolo\Spotify\WebApi\Model\Track")
     */
    private $track;

    public function setTrack(Track $track)
    {
        $this->track = $track;
        return $this;
    }

    public function getTrack()
    {
        return $this->track;
    }
}
