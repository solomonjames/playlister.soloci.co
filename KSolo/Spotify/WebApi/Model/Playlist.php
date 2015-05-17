<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#playlist-object-full
 */
class Playlist extends PlaylistSimplified
{
    use Traits\FollowersTrait;

    /**
     * @var string
     */
    private $description;

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
