<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait NameTrait
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}
