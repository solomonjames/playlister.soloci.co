<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#album-object-simplified
 */
class AlbumSimplified
{
    use Traits\IdTrait;
    use Traits\HrefTrait;
    use Traits\NameTrait;
    use Traits\ImagesTrait;
    use Traits\TypeTrait;
    use Traits\AvailableMarketsTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\UriTrait;

    private $albumType;

    public function setAlbumType($albumType)
    {
        $this->albumType = $albumType;
        return $this;
    }

    public function getAlbumType()
    {
        return $this->albumType;
    }
}
