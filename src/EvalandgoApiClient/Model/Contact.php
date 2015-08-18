<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Contact
{

    /**
     * @Type("integer")
     */
    protected $id;

    /**
     * @Type("string")
     */
    protected $title;

    /**
     * @Type("string")
     */
    protected $lastName;

    /**
     * @Type("string")
     */
    protected $firstName;

    /**
     * @Type("string")
     */
    protected $email;

    /**
     * @Type("string")
     */
    protected $company;

    /**
     * @Type("string")
     */
    protected $field1;

    /**
     * @Type("string")
     */
    protected $field2;

    /**
     * @Type("string")
     */
    protected $field3;

    /**
     * @Type("string")
     */
    protected $field4;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getField1()
    {
        return $this->field1;
    }

    public function setField1($field1)
    {
        $this->field1 = $field1;
    }

    public function getField2()
    {
        return $this->field2;
    }

    public function setField2($field2)
    {
        $this->field2 = $field2;
    }

    public function getField3()
    {
        return $this->field3;
    }

    public function setField3($field3)
    {
        $this->field3 = $field3;
    }

    public function getField4()
    {
        return $this->field4;
    }

    public function setField4($field4)
    {
        $this->field4 = $field4;
    }



}
