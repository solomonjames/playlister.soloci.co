<?php

namespace KSolo\Spotify\WebApi\Model;

use \JMS\Serializer\Annotation\Type;

/**
 * @see https://developer.spotify.com/web-api/object-model/#artist-object-full
 */
class Albums implements \ArrayAccess
{
    /**
     * @Type("array<KSolo\Spotify\WebApi\Model\Album>")
     */
    private $albums = [];

    public function setAlbums(array $albums)
    {
        $this->albums = $albums;
        return $this;
    }

    public function getAlbums()
    {
        return $this->albums;
    }

    public function offsetExists($offset)
    {
         return isset($this->albums[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->albums[$offset] : null;
    }

    public function offsetSet($offset, $value) {}

    public function offsetUnset($offset) {}
}
