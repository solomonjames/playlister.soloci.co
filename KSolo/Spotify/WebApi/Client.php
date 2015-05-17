<?php

namespace KSolo\Spotify\WebApi;

use \GuzzleHttp\Client as BaseClient;

class Client extends BaseClient
{
    private $serializer;

    private $artistUri;

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

        $album = $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Album');

        return $album;
    }

    public function getAlbums(array $albumUris)
    {
        $response = $this->get('albums', [
            'query' => ['ids' => $albumUris]
        ]);


        $album = $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Albums');

        return $album;
    }

    public function getAlbumTracks($uri)
    {
        $response = $this->get(sprintf('albums/%s/tracks', $uri));

        $album = $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Tracks');

        return $album;
    }

    public function setArtistUri($uri)
    {
        $this->artistUri = $uri;
        return $this;
    }

    public function getArtist()
    {
        $response = $this->get(sprintf('artists/%s', $this->artistUri));

        return $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Artist');
    }

    public function getArtists(array $artistUris)
    {
        $response = $this->get('artists', [
            'query' => ['ids' => $artistUris]
        ]);

        return $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Artists');
    }

    public function getArtistAlbums()
    {
        $response = $this->get(sprintf('artists/%s/albums', $this->artistUri));

        return $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Albums');
    }

    public function getArtistTopTracks()
    {
        $response = $this->get(sprintf('artists/%s/top-tracks', $this->artistUri));

        return $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Tracks');
    }

    public function getRelatedArtists()
    {
        $response = $this->get(sprintf('artists/%s/related-artists', $this->artistUri));

        return $this->deserialize($response, 'KSolo\Spotify\WebApi\Model\Artists');
    }

    protected function deserialize($response, $model)
    {
        $deserializedObject = $this->getSerializer()->deserialize($response->getBody(), $model, 'json');

        return $deserializedObject;
    }
}
