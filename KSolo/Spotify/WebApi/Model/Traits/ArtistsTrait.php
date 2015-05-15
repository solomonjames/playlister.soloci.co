<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait ArtistsTrait
{
    private $artists = array();

    public function setArtists(array $artists)
    {
        $this->artists = $artists;
        return $this;
    }

    public function getArtists()
    {
        return $this->artists;
    }
}
