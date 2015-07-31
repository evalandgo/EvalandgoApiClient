<?php

namespace ApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Question
{

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("string")
     */
    protected $type;

    /**
     * @Type("string")
     */
    protected $subtype;

    /**
     * @Type("boolean")
     */
    protected $mandatory;

    /**
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("boolean")
     */
    protected $nominative;

    /**
     * @Type("boolean")
     */
    protected $hide;

    /**
     * @Type("string")
     */
    protected $varUrl;


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

    public function setVarUrl($varUrl) {
        $this->varUrl = $varUrl;
    }

    public function getVarUrl() {
        return $this->varUrl;
    }


}
