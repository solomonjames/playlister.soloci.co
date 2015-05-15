<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#album-object-full
 */
class Album
{
    use Traits\IdTrait;
    use Traits\HrefTrait;
    use Traits\NameTrait;
    use Traits\ArtistsTrait;
    use Traits\TracksTrait;
    use Traits\ImagesTrait;
    use Traits\GenresTrait;
    use Traits\TypeTrait;
    use Traits\AvailableMarketsTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\ExternalIdsTrait;
    use Traits\PopularityTrait;
    use Traits\UriTrait;

    private $albumType;

    private $copyrights;

    private $releaseDate;

    private $releaseDatePrecision;

    public function setAlbumType($albumType)
    {
        $this->albumType = $albumType;
        return $this;
    }

    public function getAlbumType()
    {
        return $this->albumType;
    }

    public function setCopyrights(array $copyrights)
    {
        $this->copyrights = $copyrights;
        return $this;
    }

    public function getCopyrights()
    {
        return $this->copyrights;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setReleaseDatePrecision($releaseDatePrecision)
    {
        $this->releaseDatePrecision = $releaseDatePrecision;
        return $this;
    }

    public function getReleaseDatePrecision()
    {
        return $this->releaseDatePrecision;
    }
}
