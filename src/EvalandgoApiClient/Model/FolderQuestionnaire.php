<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class FolderQuestionnaire
{

    /**
     * @Type("integer")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $name;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}
