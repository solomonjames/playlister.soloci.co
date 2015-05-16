<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#track-object-simplified
 */
class TrackSimplified
{
    use Traits\ArtistsTrait;
    use Traits\AvailableMarketsTrait;
    use Traits\ExternalUrlsTrait;
    use Traits\HrefTrait;
    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\TypeTrait;
    use Traits\UriTrait;

    /**
     * @var integer
     */
    private $discNumber;

    /**
     * @var integer
     */
    private $durationMs;

    /**
     * @var boolean
     */
    private $explicit;

    /**
     * @var boolean
     */
    private $playable;

    /**
     * @var TrackLink
     */
    private $linkedFrom;

    /**
     * @var string
     */
    private $previewUrl;

    /**
     * @var integer
     */
    private $trackNumber;

    public function setDiscNumber($discNumber)
    {
        $this->discNumber = $discNumber;
        return $this;
    }

    public function getDiscNumber()
    {
        return $this->discNumber;
    }

    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;
        return $this;
    }

    public function getDurationMs()
    {
        return $this->durationMs;
    }

    public function setExplicit($explicit)
    {
        $this->explicit = $explicit;
        return $this;
    }

    public function isExplicit()
    {
        return $this->explicit;
    }

    public function setPlayable($playable)
    {
        $this->playable = $playable;
        return $this;
    }

    public function isPlayable()
    {
        return $this->playable;
    }

    public function setLinkedFrom(TrackLink $linkedFrom)
    {
        $this->linkedFrom = $linkedFrom;
        return $this;
    }

    public function getLinkedFrom()
    {
        return $this->linkedFrom;
    }

    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    public function getTrackNumber()
    {
        return $this->trackNumber;
    }
}
