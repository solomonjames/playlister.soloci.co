<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait TracksTrait
{
    private $tracks;

    public function setTracks(Paging $tracks)
    {
        $this->tracks = $tracks;
        return $this;
    }

    public function getTracks()
    {
        return $this->tracks;
    }
}
