<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#external-url-object
 */
class ExternalUrl
{
    use Traits\KeyValueTrait;

    public function isSpotifyUrl()
    {
        return 'spotify' === $this->getKey();
    }
}
