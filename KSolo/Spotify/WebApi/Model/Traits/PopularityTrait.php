<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait PopularityTrait
{
    private $popularity;

    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
        return $this;
    }

    public function getPopularity()
    {
        return $this->popularity;
    }
}
