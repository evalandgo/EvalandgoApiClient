<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\FolderQuestionnaire;

class FolderQuestionnaireRest extends BaseRest
{

    public function all() {
        $json = $this->handler->sendRequest($this->credential, '/folder_questionnaires', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\FolderQuestionnaire>');
    }

}
