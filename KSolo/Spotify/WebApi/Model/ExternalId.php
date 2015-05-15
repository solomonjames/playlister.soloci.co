<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#external-id-object
 */
class ExternalId
{
    use Traits\KeyValueTrait;

    public function isIsrc()
    {
        return 'isrc' === $this->getKey();
    }

    public function isEan()
    {
        return 'ean' === $this->getKey();
    }

    public function isUpc()
    {
        return 'upc' === $this->getKey();
    }
}
