<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Prepopulation
{

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("string")
     */
    protected $name;

    /**
     * @Type("integer")
     */
    protected $published;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }


}
