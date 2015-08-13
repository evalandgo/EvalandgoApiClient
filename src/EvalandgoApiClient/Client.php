<?php

namespace EvalandgoApiClient;

use EvalandgoApiClient\OAuth2\OAuth2ClientCredential;
use EvalandgoApiClient\OAuth2\Storage\StorageInterface;

class Client
{

    protected $credential;

    public function __construct($client_id, $client_secret, StorageInterface $storage = null) {
        $this->credential = new OAuth2ClientCredential($client_id, $client_secret, $storage);
    }

    public function getCredential()
    {
        return $this->credential;
    }

    public function setCredential(OAuth2ClientCredential $credential)
    {
        $this->credential = $credential;
    }

    public function resource($name) {
        $className = '\\EvalandgoApiClient\\Rest\\'.ucfirst($name).'Rest';

        $resource = new $className();
        $resource->setCredential($this->credential);

        return $resource;
    }

}
