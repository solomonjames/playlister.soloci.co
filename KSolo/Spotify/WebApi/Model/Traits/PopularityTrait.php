<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait PopularityTrait
{
    /**
     * @Type("integer")
     */
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
