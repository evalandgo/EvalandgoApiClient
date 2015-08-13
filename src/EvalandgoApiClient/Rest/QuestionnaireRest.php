<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Questionnaire;

class QuestionnaireRest extends BaseRest
{

    public function all() {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Questionnaire>');
    }

    public function get($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Questionnaire');
    }

    public function create(Questionnaire $questionnaire) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires', 'POST', $questionnaire);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Questionnaire');
    }

    public function update(Questionnaire $questionnaire) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaire->getId(), 'PATCH', $questionnaire);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Questionnaire');
    }

    public function delete($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId, 'DELETE');

        // TODO : cr�er objet pour delete
        return $json;
    }

}
