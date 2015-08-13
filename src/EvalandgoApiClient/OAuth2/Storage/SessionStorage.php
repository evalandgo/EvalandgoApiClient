<?php

namespace EvalandgoApiClient\OAuth2\Storage;

class SessionStorage implements StorageInterface
{

    public function __construct() {
        if( session_status() != PHP_SESSION_ACTIVE ) {
            throw new \Exception('Api client need start session', 401);
        }
    }

    public function getClientId() {
        return isset($_SESSION['oauth2']['client_id']) ? $_SESSION['oauth2']['client_id'] : null;
    }

    public function getClientSecret() {
        return isset($_SESSION['oauth2']['client_secret']) ? $_SESSION['oauth2']['client_secret'] : null;
    }

    public function getAccessToken() {
        return isset($_SESSION['oauth2']['access_token']) ? $_SESSION['oauth2']['access_token'] : null;
    }

    public function getExpires() {
        return isset($_SESSION['oauth2']['expires']) ? $_SESSION['oauth2']['expires'] : null;
    }

    public function store($clientId, $clientSecret, $accessToken, $expires) {
        $_SESSION['oauth2']['client_id'] = $clientId;
        $_SESSION['oauth2']['client_secret'] = $clientSecret;
        $_SESSION['oauth2']['access_token'] = $accessToken;
        $_SESSION['oauth2']['expires'] = $expires;
    }

}
