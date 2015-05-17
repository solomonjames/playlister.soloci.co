<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait ExternalIdsTrait
{
    /**
     * @Type("array<string, string>")
     */
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

    public function getIsrc()
    {
        return $this->getKey('isrc');
    }

    public function getEan()
    {
        return $this->get('ean');
    }

    public function getUpc()
    {
        return $this->getKey('upc');
    }

    public function hasIsrc()
    {
        return $this->hasKey('isrc');
    }

    public function hasEan()
    {
        return $this->has('ean');
    }

    public function hasUpc()
    {
        return $this->hasKey('upc');
    }

    private function hasKey($key)
    {
         return isset($this->externalIds[$key]);
    }

    private function getKey($key)
    {
         return $this->hasKey($key) ? $this->externalIds[$key] : null;
    }
}
