<?php

namespace ApiClient\Rest;

use ApiClient\Model\Question;

class QuestionRest extends BaseRest
{

    public function all($questionnaireId/*, $query*/) {

        $json = $this->handler->sendRequest($this->credential, "/questionnaires/$questionnaireId/questions", 'GET');

        return $this->handler->deserialize($json, 'array<ApiClient\Model\Question>');
    }

    public function create($questionnaireId, Question $question) {

        $json = $this->handler->sendRequest($this->credential, "/questionnaires/$questionnaireId/questions", 'POST', $question);

        return $this->handler->deserialize($json, 'ApiClient\Model\Question');
    }

}
