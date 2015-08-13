<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Report;

class ReportRest extends BaseRest
{

    public function all($questionnaireId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/reports', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Report>');
    }

    public function get($questionnaireId, $reportId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/reports/'.$reportId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Report');
    }

}
