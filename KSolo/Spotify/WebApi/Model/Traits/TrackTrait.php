<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait TrackTrait
{
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
