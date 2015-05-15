<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait ExternalIdsTrait
{
    private $externalIds = array();

    public function setExternalIds(array $externalIds)
    {
        $this->externalIds = $externalIds;
        return $this;
    }

    public function getExternalIds()
    {
        return $this->externalIds;
    }
}
