<?php

namespace KSolo\Spotify\WebApi\Model;

use \JMS\Serializer\Annotation\Type;

/**
 * @see https://developer.spotify.com/web-api/object-model/#followers-object
 */
class Followers
{
    /**
     * @Type("string")
     */
    private $href;

    /**
     * @Type("integer")
     */
    private $total;

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
