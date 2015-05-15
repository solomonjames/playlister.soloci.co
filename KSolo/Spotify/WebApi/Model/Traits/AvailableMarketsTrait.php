<?php

namespace KSolo\Spotify\WebApi\Model\Traits;

trait AvailableMarketsTrait
{
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
