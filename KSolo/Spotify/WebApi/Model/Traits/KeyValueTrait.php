<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait KeyValueTrait
{
    /**
     * @Type("string")
     */
    private $key;

    /**
     * @Type("string")
     */
    private $value;

    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
