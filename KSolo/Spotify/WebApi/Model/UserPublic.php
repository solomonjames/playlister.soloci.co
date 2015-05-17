<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#user-object-public
 */
class UserPublic
{
    use Traits\ExternalUrlsTrait;
    use Traits\FollowersTrait;
    use Traits\HrefTrait;
    use Traits\IdTrait;
    use Traits\ImagesTrait;
    use Traits\TypeTrait;
    use Traits\UriTrait;

    /**
     * @var string
     */
    private $displayName;

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }
}
