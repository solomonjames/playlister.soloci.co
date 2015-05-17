<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#track-link
 */
class TrackLink
{
    use Traits\ExternalUrlsTrait;
    use Traits\HrefTrait;
    use Traits\IdTrait;
    use Traits\TypeTrait;
    use Traits\UriTrait;
}
