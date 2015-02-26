<?php

use ApiClient\OAuth2\OAuth2ClientCredential;
use ApiClient\Test\Constants;

class OAuth2ClientCredentialTest extends \PHPUnit_Framework_TestCase {

    public function testGetAccessToken() {
        $cred = new OAuth2ClientCredential(Constants::CLIENT_ID, Constants::CLIENT_SECRET);
        $token = $cred->getAccessToken();
        $this->assertNotNull($token);

        // Check that we get the same token when issuing a new call before token expiry
        $newToken = $cred->getAccessToken();
        $this->assertNotNull($newToken);
        $this->assertEquals($token, $newToken);
    }
    
    public function testInvalidCredentials() {
        try {
            $cred = new OAuth2ClientCredential('dummy', 'secret');
            $cred->getAccessToken();
        } catch (\Exception $ex) {
            $this->assertEquals($ex->getMessage(), "The client credentials are invalid");
        }
    }
}