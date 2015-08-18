<?php

namespace EvalandgoApiClient\Rest;

class PrepopulationContactRest extends BaseRest
{

    public function get($questionnaireId, $prepopulationId, $contactQuestionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations/'.$prepopulationId.'/contacts/'.$contactQuestionnaireId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\ContactQuestionnaire');
    }

    public function create($questionnaireId, $prepopulationId, $contactId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations/'.$prepopulationId.'/contacts/'.$contactId, 'POST');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\ContactQuestionnaire');
    }

}
