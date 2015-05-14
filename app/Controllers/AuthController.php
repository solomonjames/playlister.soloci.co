<?php

namespace Controllers;

use OAuth\OAuth2\Service\Spotify;
use OAuth\Common\Storage\SymfonySession;
use OAuth\Common\Consumer\Credentials;

class AuthController extends Controller
{
    use \Session\SessionTrait;

    private $serviceFactory;

    private $spotifyService;

    public function spotifyAction()
    {
        return $this->app->redirect((string) $this->getSpotifyService()->getAuthorizationUri());
    }

    public function callbackAction()
    {
        $request = $this->app['request'];

        if ($request->query->has('?code')) {
            // This was a callback request from Spotify, get the token
            $this->getSpotifyService()->requestAccessToken($request->query->get('?code'));

            // Send a request with it
            $result = json_decode($this->getSpotifyService()->request('me'), true);

            $this->session()->set('userInfo', $result);
        }

        return $this->app->redirect($this->app['url_generator']->generate('home'));
    }

    protected function getSpotifyService()
    {
        if (null !== $this->spotifyService) {
            return $this->spotifyService;
        }

        $config = $this->app['spotify.credentials'];
        $callbackUrl = $this->app['url_generator']->generate('auth.callback', [], true);
        $session = new SymfonySession($this->app['session']);

        // Setup the credentials for the requests
        $credentials = new Credentials($config['id'], $config['secret'], $callbackUrl);

        $this->spotifyService = $this->getServiceFactory()->createService('spotify', $credentials, $session);

        return $this->spotifyService;
    }

    protected function getServiceFactory()
    {
        if (null === $this->serviceFactory) {
            $this->serviceFactory = new \OAuth\ServiceFactory();
        }

        return $this->serviceFactory;
    }
}
