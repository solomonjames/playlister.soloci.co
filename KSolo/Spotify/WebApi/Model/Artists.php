<?php

namespace KSolo\Spotify\WebApi\Model;

use \JMS\Serializer\Annotation\Type;

/**
 * @see https://developer.spotify.com/web-api/object-model/#artist-object-full
 */
class Artists implements \ArrayAccess
{
    /**
     * @Type("array<KSolo\Spotify\WebApi\Model\Artist>")
     */
    private $artists = [];

    public function setArtists(array $artists)
    {
        $this->artists = $artists;
        return $this;
    }

    public function getArtists()
    {
        return $this->artists;
    }

    public function offsetExists($offset)
    {
         return isset($this->artists[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->artists[$offset] : null;
    }

    public function offsetSet($offset, $value) {}

    public function offsetUnset($offset) {}
}
