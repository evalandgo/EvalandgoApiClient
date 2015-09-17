<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class Invitation
{

    /**
     * @Type("string")
     */
    protected $from;

    /**
     * @Type("string")
     */
    protected $subject;

    /**
     * @Type("string")
     */
    protected $html_content;

    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getHtmlContent()
    {
        return $this->html_content;
    }

    public function setHtmlContent($html_content)
    {
        $this->html_content = $html_content;
    }


}
