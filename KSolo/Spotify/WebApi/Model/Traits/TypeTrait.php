<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait TypeTrait
{
    private $type;

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
}
