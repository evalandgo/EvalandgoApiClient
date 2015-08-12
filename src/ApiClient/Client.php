<?php

namespace ApiClient;

use ApiClient\OAuth2\OAuth2ClientCredential;

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
        $className = '\\ApiClient\\Rest\\'.ucfirst($name).'Rest';

        $resource = new $className();
        $resource->setCredential($this->credential);

        return $resource;
    }

}
