<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait GenresTrait
{
    private $genres = array();

    public function setGenres(array $genres)
    {
        $this->genres = $genres;
        return $this;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function hasGenre($genre)
    {
        return in_array($genre, $this->getGenres());
    }
}
