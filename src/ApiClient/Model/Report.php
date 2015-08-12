<?php

namespace ApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Report
{

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("integer")
     */
    protected $questionnaireId;

    /**
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("string")
     */
    protected $publicUrl;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setQuestionnaireId($questionnaireId) {
        $this->questionnaireId = $questionnaireId;
    }

    public function getQuestionnaireId() {
        return $this->questionnaireId;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setPublicUrl($publicUrl) {
        $this->publicUrl = $publicUrl;
    }

    public function getPublicUrl() {
        return $this->publicUrl;
    }

}
