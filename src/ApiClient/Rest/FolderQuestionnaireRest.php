<?php

namespace ApiClient\Rest;

use ApiClient\Model\FolderQuestionnaire;

class FolderQuestionnaireRest extends BaseRest
{

    public function all() {
        $json = $this->handler->sendRequest($this->credential, '/folder_questionnaires', 'GET');

        return $this->handler->deserialize($json, 'array<ApiClient\Model\FolderQuestionnaire>');
    }

}
