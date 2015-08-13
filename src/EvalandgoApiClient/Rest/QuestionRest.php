<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Question;

class QuestionRest extends BaseRest
{

    public function all($questionnaireId/*, $query*/) {

        $json = $this->handler->sendRequest($this->credential, "/questionnaires/$questionnaireId/questions", 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Question>');
    }

    public function create($questionnaireId, Question $question) {

        $json = $this->handler->sendRequest($this->credential, "/questionnaires/$questionnaireId/questions", 'POST', $question);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Question');
    }

}
