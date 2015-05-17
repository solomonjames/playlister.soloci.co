<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait AddedAtTrait
{
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
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
