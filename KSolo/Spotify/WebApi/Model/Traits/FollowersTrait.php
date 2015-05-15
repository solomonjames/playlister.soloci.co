<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait FollowersTrait
{
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
