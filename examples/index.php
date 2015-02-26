<?php
session_start();

require __DIR__.'/../vendor/autoload.php';

use ApiClient\OAuth2\OAuth2ClientCredential;
use ApiClient\Rest\RessourceHandler;

$client = new OAuth2ClientCredential('testclient','testpass');

$handler = new RessourceHandler($client);

$data = $handler->get('/questionnaireshh');

var_dump($data);