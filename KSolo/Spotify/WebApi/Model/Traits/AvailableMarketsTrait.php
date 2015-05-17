<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

use JMS\Serializer\Annotation\Type;

trait AvailableMarketsTrait
{
    /**
     * @Type("array<string>")
     */
    private $availableMarkets = array();

    public function setAvailableMarkets(array $availableMarkets)
    {
        $this->availableMarkets = $availableMarkets;
        return $this;
    }

    public function getAvailableMarkets()
    {
        return $this->availableMarkets;
    }

    public function isAvailableIn($market)
    {
        return in_array($market, $this->getAvailableMarkets());
    }
}
