<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#artist-object-full
 */
class Artist
{
    use Traits\IdTrait;
    use Traits\HrefTrait;
    use Traits\NameTrait;
    use Traits\TypeTrait;
    use Traits\ImagesTrait;
    use Traits\GenresTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\FollowersTrait;
    use Traits\PopularityTrait;
    use Traits\UriTrait;
}
