<?php

namespace EvalandgoApiClient\Model;

use JMS\Serializer\Annotation\Type;

class FilterReport
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
     * @Type("array<array<integer>>")
     */
    protected $filterQuestion;

    /**
     * @Type("string")
     */
    protected $filterQuestionActive;

    /**
     * @Type("string")
     */
    protected $urlReportComplement;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setFilterQuestion($filterQuestion) {
        $this->filterQuestion = $filterQuestion;
    }

    public function getFilterQuestion() {
        return $this->filterQuestion;
    }

    public function setFilterQuestionActive($filterQuestionActive) {
        $this->filterQuestionActive = $filterQuestionActive;
    }

    public function getFilterAuestionActive() {
        return $this->filterQuestionActive;
    }

    public function setUrlReportComplement($urlReportComplement) {
        $this->urlReportComplement = $urlReportComplement;
    }

    public function getUrlReportComplement() {
        return $this->urlReportComplement;
    }

}
