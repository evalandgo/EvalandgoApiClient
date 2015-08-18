<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Prepopulation;

class PrepopulationRest extends BaseRest
{

    public function all($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Prepopulation>');
    }

    public function get($questionnaireId, $prepopulationId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations/'.$prepopulationId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Prepopulation');
    }

    public function create($questionnaireId, Prepopulation $prepopulation) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/prepopulations', 'POST', $prepopulation);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Prepopulation');
    }

}
