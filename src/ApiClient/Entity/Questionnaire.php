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

namespace ApiClient\Entity;

use ApiClient\Rest\ResourceHandler;
use JMS\Serializer\Annotation as JSA;

/**
 * Class Questionnaire
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class Questionnaire extends ResourceHandler { 
    
    /**
     * @JSA\Type("integer")
     */
    private $id;
    
    /**
     * @JSA\Type("string")
     */
    private $title;
    
    /**
     * @JSA\Type("boolean")
     */
    private $close;
    
    /**
     * @JSA\Type("integer")
     */
    private $folder_id;
    
    /**
     * @JSA\Type("string")
     */
    private $public_url;

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setClose($close) {
        $this->close = $close;
    }

    public function getClose() {
        return $this->close;
    }

    public function setFolder_id($folder_id) {
        $this->folder_id = $folder_id;
    }

    public function getFolder_id() {
        return $this->folder_id;
    }

    public function setPublic_url($public_url) {
        $this->public_url = $public_url;
    }

    public function getPublic_url() {
        return $this->public_url;
    }

    /**
     * Creates a new Questionnaire Resource
     *
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return Questionnaire
     */
    public function create($credential) {
        $post = get_object_vars($this);
        
        $json = self::createRequest($credential, '/questionnaires', 'POST', $post);
        
        $this->fromJson($json);
        return json_decode($json);
    }

    /**
     * Obtain the Questionnaire resource for the given identifier.
     *
     * @param string $questionnairedId
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return Questionnaire
     */
    public static function all($credential) {
        $json = self::createRequest($credential, '/questionnaires', 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }

    /**
     * Obtain the Questionnaire resource for the given identifier.
     *
     * @param integer $questionnairedId
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return Questionnaire
     */
    public static function get($questionnairedId, $credential) {
        $json = self::createRequest($credential, '/questionnaires/'.$questionnairedId, 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }

    /**
     * Delete the Questionnaire resource for the given identifier.
     *
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return bool
     */
    public function delete($credential) {
        $json = self::createRequest($credential, '/questionnaires/'.$this->getId(), 'DELETE');
        
        unset($this);
        
        return json_decode($json);
    }

    /**
     * Update the Questionnaire resource for the given identifier.
     *
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PPRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return CreditCard
     */
    public function update($credential) {
        $post = get_object_vars($this);
        
        $json = self::createRequest($credential, '/questionnaires/'.$this->getId(), 'PATCH', $post);
        
        $this->fromJson($json);
        return json_decode($json);
    }
}
