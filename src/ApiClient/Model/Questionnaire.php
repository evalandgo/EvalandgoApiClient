<?php

namespace ApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Questionnaire
{

    /**
     * @Type("integer")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $title;

    /**
     * @Type("boolean")
     */
    private $close;

    /**
     * @Type("integer")
     */
    private $folderId;

    /**
     * @Type("string")
     */
    private $publicUrl;

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

    public function setFolderId($folderId) {
        $this->folderId = $folderId;
    }

    public function getFolderId() {
        return $this->folderId;
    }

    public function setPublicUrl($publicUrl) {
        $this->publicUrl = $publicUrl;
    }

    public function getPublicUrl() {
        return $this->publicUrl;
    }

}
