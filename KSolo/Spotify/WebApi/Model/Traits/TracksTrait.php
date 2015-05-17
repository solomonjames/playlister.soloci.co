<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait TracksTrait
{
    /**
     * @Type("KSolo\Spotify\WebApi\Model\Paging")
     */
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
