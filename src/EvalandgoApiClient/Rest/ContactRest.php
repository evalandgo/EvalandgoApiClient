<?php

namespace EvalandgoApiClient\Rest;

use EvalandgoApiClient\Model\Contact;

class ContactRest extends BaseRest
{

    public function all() {
        $json = $this->handler->sendRequest($this->credential, '/contacts', 'GET');

        return $this->handler->deserialize($json, 'array<EvalandgoApiClient\Model\Contact>');
    }

    public function get($clientId) {
        $json = $this->handler->sendRequest($this->credential, '/contacts/'.$clientId, 'GET');

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Contact');
    }

    public function create(Contact $contact) {
        $json = $this->handler->sendRequest($this->credential, '/contacts', 'POST', $contact);

        return $this->handler->deserialize($json, 'EvalandgoApiClient\Model\Contact');
    }

}
