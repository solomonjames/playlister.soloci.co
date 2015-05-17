<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait IdTrait
{
    /**
     * @Type("string")
     */
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
