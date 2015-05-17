<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#artist-object-simplified
 */
class ArtistSimplified
{
    use Traits\IdTrait;
    use Traits\HrefTrait;
    use Traits\NameTrait;
    use Traits\TypeTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\UriTrait;
}
