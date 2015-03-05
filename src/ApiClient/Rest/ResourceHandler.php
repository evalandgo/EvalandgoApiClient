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

namespace ApiClient\Rest;

use ApiClient\OAuth2\OAuth2ClientCredential;

/**
 * Description of RessourceHandler
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class ResourceHandler {
    
    protected static function createRequest(OAuth2ClientCredential $credential, $url, $method = 'GET', $post = null) {
        $request = $credential->getHttp()->createRequest($method, $credential->getPath().'/v1'.$url, null, $post, array('exceptions' => false));
        $request->getQuery()->set('access_token', $credential->getAccessToken());
        $response = $request->send();

        return (string) $response->getBody();
    }
    
    /**
     * Fills object value from Json string
     *
     * @param $json
     * @return $this
     */
    protected static function fromJsonStatic($json, $class) {
        $var = json_decode($json);
        if(is_array($var)) {
            $result = array();
            foreach ($var as $value) {
                $questionnaire = new $class();
                $result[] = $questionnaire->deserialize(json_encode($value));
            }
            return $result;
        }
        else{
            $questionnaire = new $class();
            return $questionnaire->deserialize($json);
        }
    }
    
    /**
     * Fills object value from Json string
     *
     * @param $json
     * @return $this
     */
    protected function fromJson($json, $class = null) {
        return $this->deserialize($json);
    }
    
    private function deserialize($jsonData) {/*
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        return $serializer->deserialize($jsonData, get_called_class(), 'json');*/
        
        $objectConstructor = new \ApiClient\JMS\InitializedObjectConstructor(new \JMS\Serializer\Construction\UnserializeObjectConstructor());
        $serializer = \JMS\Serializer\SerializerBuilder::create()->setObjectConstructor($objectConstructor)->build();
        $context = new \JMS\Serializer\DeserializationContext();
        $context->attributes->set('target', $this);
        return $serializer->deserialize($jsonData, get_called_class(), 'json', $context);
    }
}
