<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#album-object-full
 */
class Album extends AlbumSimplified
{
    use Traits\ArtistsTrait;
    use Traits\TracksTrait;
    use Traits\GenresTrait;
    use Traits\ExternalIdsTrait;
    use Traits\PopularityTrait;

    private $copyrights;

    private $releaseDate;

    private $releaseDatePrecision;

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
