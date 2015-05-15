<?php

namespace KSolo\Spotify\WebAPI\Model;

class Category
{
    use Traits\HrefTrait;
    use Traits\IdTrait;
    use Traits\NameTrait;

    private $icons;

    public function setIcons(array $icons)
    {
        $this->icons = $icons;
        return $this;
    }

    public function getIcons()
    {
        return $this->icons;
    }
}
