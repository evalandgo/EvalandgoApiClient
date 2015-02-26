<?php

use ApiClient\OAuth2\OAuth2ClientCredential;
use ApiClient\Test\Constants;
use ApiClient\Rest\RessourceHandler;

class RessourceHandlerTest extends \PHPUnit_Framework_TestCase {
    
    private $handler;

    public function setUp() {
        $cred = new OAuth2ClientCredential(Constants::CLIENT_ID, Constants::CLIENT_SECRET);
        $this->handler = new RessourceHandler($cred);
    }

    public function testGet() {
        $data = $this->handler->get('/questionnaires');
        $this->assertCount(2,$data);
        
        $this->assertArrayHasKey('title',$data[0]);
    }

    public function testGetFailure() {
        $data = $this->handler->get('/bad_ressource');
        $this->assertNull($data);
    }
}
