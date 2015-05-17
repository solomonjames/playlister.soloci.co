<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait FollowersTrait
{
    /**
     * @Type("KSolo\Spotify\WebApi\Model\Followers")
     */
    private $followers;

    public function setFollowers(Followers $followers)
    {
        $this->followers = $followers;
        return $this;
    }

    public function getFollowers()
    {
        return $this->followers;
    }
}
