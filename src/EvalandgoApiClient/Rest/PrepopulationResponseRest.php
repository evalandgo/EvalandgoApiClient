<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Response;

class PrepopulationResponseRest extends BaseRest
{

    public function all($questionnaireId, $prepopulationId, $contactQuestionnaireid) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations/'.$prepopulationId.'/contacts/'.$contactQuestionnaireid.'/responses', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Response>');
    }

    public function create($questionnaireId, $prepopulationId, $contactQuestionnaireId, $responses) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations/'.$prepopulationId.'/contacts/'.$contactQuestionnaireId.'/responses', 'POST', $responses);

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Response>');
    }

}
