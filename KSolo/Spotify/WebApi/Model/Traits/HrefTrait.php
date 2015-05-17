<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait HrefTrait
{
    /**
     * @Type("string")
     */
    private $href;

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }
}
