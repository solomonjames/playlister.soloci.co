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
        $client = $this->app['spotify.webapi.client'];
        $album = $client->getAlbum('5BGzOpea6At0Nd7tYtYZOP');

        //var_dump($response->json());

        $serializer = $this->app['jms.serializer'];

        //$album = $serializer->deserialize($response->getBody(), 'KSolo\\Spotify\\WebApi\\Model\\Album', 'json');
        var_dump($album);

        return '';
    }
}
