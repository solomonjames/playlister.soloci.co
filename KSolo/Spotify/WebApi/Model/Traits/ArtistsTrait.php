<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait ArtistsTrait
{
    /**
     * @Type("array<KSolo\Spotify\WebApi\Model\ArtistSimplified>")
     */
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
