<?php

/*
 * The MIT License
 *
 * Copyright 2015 Evalandgo Team <support@evalandgo.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace ApiClient\OAuth2;

use Guzzle\Http\Client as GuzzleClient;
use Cviebrock\Guzzle\Plugin\StripBom\StripBomPlugin;

/**
 * Class OAuth2ClientCredential
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class OAuth2ClientCredential {

    /**
     * Client ID as obtained from the developer portal
     *
     * @var string $clientId
     */
    private $clientId;

    /**
     * Client secret as obtained from the developer portal
     *
     * @var string $clientSecret
     */
    private $clientSecret;

    /**
     * Generated Access Token
     *
     * @var string $accessToken
     */
    private $accessToken;

    /**
     * Private Variable
     *
     * @var \Guzzle\Http\Client $http
     */
    private $http;
    
    private $path;

    /**
     * Construct
     *
     * @param string $clientId     client id obtained from the developer portal
     * @param string $clientSecret client secret obtained from the developer portal
     */
    public function __construct($clientId, $clientSecret) {
        
        if(session_status()!=PHP_SESSION_ACTIVE) throw new \Exception('Api client need start session', 401);
        
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->path = 'http://app.evalandc.dev/api';
        
        $this->query = array(
            'grant_type'    => 'client_credentials',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
        );
        
        $this->http = new GuzzleClient();
        $this->http->addSubscriber(new StripBomPlugin());
    }

    /**
     * Get AccessToken
     *
     * @return null|string
     */
    public function getAccessToken() {
        return $this->getToken($this->query);
    }

    /**
     * Get Http
     *
     * @return \Guzzle\Http\Client
     */
    public function getHttp() {
        return $this->http;
    }

    /**
     * Get Path
     *
     * @return string
     */
    public function getPath() {
        return $this->path;
    }
    
    private function getToken($query) {
        unset($_SESSION['oauth2']);
        if(!isset($_SESSION['oauth2']) || $_SESSION['oauth2']['client_id'] != $query['client_id'] || $_SESSION['oauth2']['client_secret'] != $query['client_secret'] || $_SESSION['oauth2']['expires'] <= time()){
            $response = $this->http->post($this->path.'/oauth2/token', null, $query, array('exceptions' => false))->send();
            $data = json_decode((string) $response->getBody(), true);
            if(isset($data['error']))
                throw new \Exception($data['error_description'], 401);

            $_SESSION['oauth2']['access_token'] = $data['access_token'];
            $_SESSION['oauth2']['expires'] = $data['expires_in'] + time();
            $_SESSION['oauth2']['client_id'] = $query['client_id'];
            $_SESSION['oauth2']['client_secret'] = $query['client_secret'];
        }
        
        return $_SESSION['oauth2']['access_token'];
    }
}