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
 * Class Question
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class Question extends ResourceHandler {
    
    /** 
     * @JSA\Type("integer")
     */
    protected $id;
    
    /**
     * @JSA\Type("string")
     */
    protected $type;
    
    /**
     * @JSA\Type("string")
     */
    protected $subtype;
    
    /**
     * @JSA\Type("boolean")
     */
    protected $mandatory;
    
    /**
     * @JSA\Type("string")
     */
    protected $title;
    
    /**
     * @JSA\Type("boolean")
     */
    protected $nominative;
    
    /**
     * @JSA\Type("boolean")
     */
    protected $hide;
    
    /**
     * @JSA\Type("string")
     */
    protected $var_url;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setMandatory($mandatory) {
        $this->mandatory = $mandatory;
    }

    public function getMandatory() {
        return $this->mandatory;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setHide($hide) {
        $this->hide = $hide;
    }

    public function getHide() {
        return $this->hide;
    }

    public function setSubtype($subtype) {
        $this->subtype = $subtype;
    }
    
    public function getSubtype() {
        return $this->subtype;
    }

    public function setNominative($nominative) {
        $this->nominative = $nominative;
    }

    public function getNominative() {
        return $this->nominative;
    }

    public function setVar_url($var_url) {
        $this->var_url = $var_url;
    }

    public function getVar_url() {
        return $this->var_url;
    }

    /**
     * Obtain the Questionnaire resource for the given identifier.
     *
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @param string $questionnairedId
     * @return Question[]
     */
    public static function all($credential, $questionnairedId) {
        $json = self::createRequest($credential, "/questionnaires/$questionnairedId/questions", 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }

    /**
     * Creates a new Questionnaire Resource
     *
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @param string $questionnairedId
     * @return Questionnaire
     */
    public function create($credential, $questionnairedId) {
        $post = get_object_vars($this);
        
        $json = self::createRequest($credential, "/questionnaires/$questionnairedId/questions", 'POST', $post);
        
        $this->fromJson($json);
        return json_decode($json);
    }
}
