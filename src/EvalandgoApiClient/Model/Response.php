<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Response
{

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("integer")
     */
    protected $contactQuestionnaireId;

    /**
     * @Type("integer")
     */
    protected $questionnaireId;

    /**
     * @Type("integer")
     */
    protected $questionId;

    /**
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @Type("integer")
     */
    protected $choiceId;

    /**
     * @Type("integer")
     */
    protected $value;

    /**
     * @Type("string")
     */
    protected $text;

    /**
     * @Type("string")
     */
    protected $date;

    /**
     * @Type("string")
     */
    protected $dateResponse;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getContactQuestionnaireId()
    {
        return $this->contactQuestionnaireId;
    }

    public function setContactQuestionnaireId($contactQuestionnaireId)
    {
        $this->contactQuestionnaireId = $contactQuestionnaireId;
    }

    public function getQuestionnaireId()
    {
        return $this->questionnaireId;
    }

    public function setQuestionnaireId($questionnaireId)
    {
        $this->questionnaireId = $questionnaireId;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    public function getChoiceId()
    {
        return $this->choiceId;
    }

    public function setChoiceId($choiceId)
    {
        $this->choiceId = $choiceId;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDateResponse()
    {
        return $this->dateResponse;
    }

    public function setDateResponse($dateResponse)
    {
        $this->dateResponse = $dateResponse;
    }



}
