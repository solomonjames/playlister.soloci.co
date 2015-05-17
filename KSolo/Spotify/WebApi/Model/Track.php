<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#track-object-full
 */
class Track extends TrackSimplified
{
    use Traits\PopularityTrait;
    use Traits\ExternalIdsTrait;

    /**
     * @var AlbumSimplified
     */
    private $album;

    public function setAlbum(AlbumSimplified $album)
    {
        $this->album = $album;
        return $this;
    }

    public function getAlbum()
    {
         return $this->album;
    }
}
