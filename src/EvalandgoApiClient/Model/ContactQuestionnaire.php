<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class ContactQuestionnaire
{

    /**
     * @Type("integer")
     */
    protected $contactQuestionnaireId;

    /**
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @Type("string")
     */
    protected $questionnaireUrl;

    public function getContactQuestionnaireId()
    {
        return $this->contactQuestionnaireId;
    }

    public function setContactQuestionnaireId($contactQuestionnaireId)
    {
        $this->contactQuestionnaireId = $contactQuestionnaireId;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    public function getQuestionnaireUrl()
    {
        return $this->questionnaireUrl;
    }

}
