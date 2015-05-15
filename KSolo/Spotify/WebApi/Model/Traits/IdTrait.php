<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait IdTrait
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}
