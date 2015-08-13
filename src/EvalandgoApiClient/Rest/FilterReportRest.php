<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\FilterReport;

class FilterReportRest extends BaseRest
{

    public function all($questionnaireId, $reportId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/reports/'.$reportId.'/filters', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\FilterReport>');
    }

    public function get($questionnaireId, $reportId, $filterId) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/reports/'.$reportId.'/filters/'.$filterId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\FilterReport');
    }

    public function create($questionnaireId, $reportId, FilterReport $filter) {
        $json = $this->handler->sendRequest($this->credential, '/questionnaires/'.$questionnaireId.'/reports/'.$reportId.'/filters', 'POST', $filter);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\FilterReport');
    }

}
