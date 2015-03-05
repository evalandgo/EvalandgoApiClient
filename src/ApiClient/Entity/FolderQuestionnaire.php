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
 * Class FolderQuestionnaire
 *
 * @author Valentin Boschatel <valentin.boschatel@evalandgo.com>
 */
class FolderQuestionnaire extends ResourceHandler { 
    
    /**
     * @JSA\Type("integer")
     */
    private $id;
    
    /**
     * @JSA\Type("string")
     */
    private $name;
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    /**
     * Obtain the FolderQuestionnaire resource for the given identifier.
     *
     * @param string $questionnairedId
     * @param OAuth2ClientCredential $credential authentication system with credential OAuth 2.0 
     * @return FolderQuestionnaire
     */
    public static function all($credential) {
        $json = self::createRequest($credential, '/folder_questionnaires', 'GET');
        
        return self::fromJsonStatic($json, get_called_class());
    }
}
