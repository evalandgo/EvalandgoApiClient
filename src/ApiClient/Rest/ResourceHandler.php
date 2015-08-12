<?php

namespace ApiClient\Rest;

use ApiClient\OAuth2\OAuth2ClientCredential;
use JMS\Serializer\SerializerBuilder;

class ResourceHandler {
    
    public function sendRequest(OAuth2ClientCredential $credential, $url, $method = 'GET', $object = null) {
        $request = $credential->getHttp()->createRequest($method, $credential->getPath().'/v1'.$url, null, json_decode($this->serialize($object), true), array('exceptions' => false));
        $request->getQuery()->set('access_token', $credential->getAccessToken());
        $response = $request->send();

        return $response->json();
    }

    public function serialize($object) {
        $serializer = SerializerBuilder::create()->build();

        return $serializer->serialize($object, 'json');
    }

    public function deserialize($json, $objectName) {
        $serializer = SerializerBuilder::create()->build();

        return $serializer->deserialize(json_encode($json), $objectName, 'json');
    }

}
