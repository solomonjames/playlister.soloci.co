<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#playlist-object-simplified
 */
class PlaylistSimplified
{
    use Traits\ExternalUrlsTrait;
    use Traits\HrefTrait;
    use Traits\IdTrait;
    use Traits\ImagesTrait;
    use Traits\NameTrait;
    use Traits\TracksTrait;
    use Traits\TypeTrait;
    use Traits\UriTrait;

    /**
     * @var boolean
     */
    private $collaborative;

    /**
     * @var boolean
     */
    private $public;

    /**
     * @var User
     */
    private $owner;

    /**
     * @var string
     */
    private $snapshotId;

    public function setCollaborative($collaborative)
    {
        $this->collaborative = $collaborative;
        return $this;
    }

    public function isCollaborative()
    {
        return $this->collaborative;
    }

    public function setPublic($public)
    {
        $this->public = $public;
        return $this;
    }

    public function isPublic()
    {
        return $this->public;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setSnapshotId($snapshotId)
    {
        $this->snapshotId = $snapshotId;
        return $this;
    }

    public function getSnapshotId()
    {
        return $this->snapshotId;
    }
}
