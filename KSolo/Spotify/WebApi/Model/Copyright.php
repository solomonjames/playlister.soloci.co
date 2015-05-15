<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#copyright-object
 */
class Copyright
{
    private $text;

    private $type;

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function isTypeCopyright()
    {
         return 'C' === $this->getType();
    }

    public function isTypeSoundRecording()
    {
         return 'P' === $this->getType();
    }
}
