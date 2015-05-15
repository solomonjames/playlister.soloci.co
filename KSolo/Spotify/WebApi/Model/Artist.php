<?php

namespace KSolo\Spotify\WebAPI\Model;

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
