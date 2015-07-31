<?php

namespace ApiClient\Rest;

use ApiClient\Model\Questionnaire;

class QuestionnaireRest extends BaseRest
{

    public function all() {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires', 'GET');

        return $this->handler->deserialize($json, 'array<ApiClient\Model\Questionnaire>');
    }

    public function get($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId, 'GET');

        return $this->handler->deserialize($json, 'ApiClient\Model\Questionnaire');
    }

    public function create(Questionnaire $questionnaire) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires', 'POST', $this->handler->serialize($questionnaire));

        return $this->handler->deserialize($json, 'ApiClient\Model\Questionnaire');
    }

    public function update(Questionnaire $questionnaire) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaire->getId(), 'PATCH', $this->handler->serialize($questionnaire));

        return $this->handler->deserialize($json, 'ApiClient\Model\Questionnaire');
    }

    public function delete($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId, 'DELETE');

        // TODO : créer objet pour delete
        return $json;
    }

}
