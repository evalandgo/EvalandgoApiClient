<?php

namespace EvalandgoApiClient\OAuth2\Storage;

interface StorageInterface
{

    public function getClientId();

    public function getClientSecret();

    public function getAccessToken();

    public function getExpires();

    public function store($clientId, $clientSecret, $accessToken, $expires);

}
