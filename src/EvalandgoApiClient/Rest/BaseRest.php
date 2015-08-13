<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\OAuth2\OAuth2ClientCredential;

abstract class BaseRest
{

    protected $handler;
    protected $credential;

    public function __construct() {
        $this->handler = new ResourceHandler();
    }

    public function getHandler()
    {
        return $this->handler;
    }

    public function setHandler(ResourceHandler $handler)
    {
        $this->handler = $handler;
    }

    public function getCredential()
    {
        return $this->credential;
    }

    public function setCredential(OAuth2ClientCredential $credential)
    {
        $this->credential = $credential;
    }



}
