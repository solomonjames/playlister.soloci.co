<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#artist-object-full
 */
class Artist extends ArtistSimplified
{
    use Traits\ImagesTrait;
    use Traits\GenresTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\FollowersTrait;
    use Traits\PopularityTrait;
}
