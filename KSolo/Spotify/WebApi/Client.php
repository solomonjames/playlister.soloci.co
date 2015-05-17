<?php

namespace KSolo\Spotify\WebApi;

use \GuzzleHttp\Client as BaseClient;

class Client extends BaseClient
{
    private $serializer;

    public function __construct(array $config = [])
    {
        $defaults = [
            'base_url' => 'https://api.spotify.com/v1/'
        ];

        $mergedConfig = array_merge_recursive($defaults, $config);

        parent::__construct($mergedConfig);
    }

    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;
        return $this;
    }

    public function getSerializer()
    {
        return $this->serializer;
    }

    public function getAlbum($uri)
    {
        $response = $this->get(sprintf('albums/%s', $uri));

        $album = $this->getSerializer()->deserialize($response->getBody(), 'KSolo\Spotify\WebApi\Model\Album', 'json');

        return $album;
    }
}
