<?php

namespace Controllers;

class DefaultController extends Controller
{
    use \Session\SessionTrait;

    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->app['twig']->render('home.twig', [
            'message' => 'poop'
        ]);
    }

    public function playlistsAction()
    {
        $client = new \GuzzleHttp\Client([
            'base_url' => 'https://api.spotify.com/v1/'
        ]);

        $response = $client->get('albums/5BGzOpea6At0Nd7tYtYZOP');

        //var_dump($response->json());

        //$serializer  = $this->app['serializer'];
        //$normalizers = $this->app['serializer.normalizers'];
        $serializer = $this->app['jms.serializer'];

        $album = $serializer->deserialize($response->getBody(), 'KSolo\\Spotify\\WebApi\\Model\\Album', 'json');
        var_dump($album);

        //var_dump($normalizers);

        //$serializer->deserialize($response->getBody(), '\\KSolo\\Spotify\\WebApi\\Model\\Album', 'json');
        return '';
    }
}
