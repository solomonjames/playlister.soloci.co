<?php

namespace KSolo\Spotify\WebAPI\Model;

class PlaylistTrack
{
    use Traits\AddedAtTrait;
    use Traits\TrackTrait;

    private $addedBy;

    private $isLocal;

    public function setAddedBy(User $addedBy)
    {
        $this->addedBy = $addedBy;
        return $this;
    }

    public function getAddedBy()
    {
        return $this->addedBy;
    }

    public function setIsLocal($isLocal)
    {
        $this->isLocal = (boolean) $isLocal;
        return $this;
    }

    public function isLocal()
    {
        return $this->isLocal;
    }
}
