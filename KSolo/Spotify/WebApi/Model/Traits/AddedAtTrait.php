<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait AddedAtTrait
{
    private $addedAt;

    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
        return $this;
    }

    public function getAddedAt()
    {
        return $this->addedAt;
    }
}
