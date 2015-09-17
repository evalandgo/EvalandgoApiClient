<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Invitation;

class InvitationRest extends BaseRest
{

    public function sendPrepopulation($prepopulationId, Invitation $invitation) {
        $json = $this->handler->sendRequest($this->credential, '/invitation/sendPrepopulation/'.$prepopulationId, 'POST', $invitation);

        return $json;
    }

}
