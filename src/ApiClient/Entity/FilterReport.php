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
 * Class FilterReport
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class FilterReport extends ResourceHandler {
    
    /** 
     * @JSA\Type("integer")
     */
    protected $id;
    
    /** 
     * @JSA\Type("string")
     */
    protected $title;
    
    /**
     * @JSA\Type("array<array<integer>>")
     */
    protected $filter_question;
    
    /** 
     * @JSA\Type("string")
     */
    protected $filter_question_active;
    
    /** 
     * @JSA\Type("string")
     */
    protected $url_report_complement;

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

    public function setFilter_question($filter_question) {
        $this->filter_question = $filter_question;
    }

    public function getFilter_question() {
        return $this->filter_question;
    }

    public function setFilter_question_active($filter_question_active) {
        $this->filter_question_active = $filter_question_active;
    }

    public function getFilter_question_active() {
        return $this->filter_question_active;
    }

    public function setUrl_report_complement($url_report_complement) {
        $this->url_report_complement = $url_report_complement;
    }

    public function getUrl_report_complement() {
        return $this->url_report_complement;
    }

    /**
     * Creates a new FilterReport Resource
     *
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return FilterReport
     */
    public function create($credential, $qaireId, $reportId) {
        $post = get_object_vars($this);
        
        $json = self::createRequest($credential, "/questionnaires/$qaireId/reports/$reportId/filters", 'POST', $post);
        
        $this->fromJson($json);
        return json_decode($json);
    }

    /**
     * Obtain the FilterReport resource for the given identifier.
     *
     * @param string $questionnairedId
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return FilterReport
     */
    public static function all($credential, $qaireId, $reportId) {
        $json = self::createRequest($credential, "/questionnaires/$qaireId/reports/$reportId/filters", 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }

    /**
     * Obtain the FilterReport resource for the given identifier.
     *
     * @param integer $questionnairedId
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return FilterReport
     */
    public static function get($credential, $qaireId, $reportId, $filterId) {
        $json = self::createRequest($credential, "/questionnaires/$qaireId/reports/$reportId/filters/".$filterId, 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }
}
