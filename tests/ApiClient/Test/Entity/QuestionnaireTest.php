<?php


namespace ApiClient\Entity;

use ApiClient\OAuth2\OAuth2ClientCredential;
use ApiClient\Test\Constants;
use ApiClient\Entity\Questionnaire;

class QuestionnaireTest extends \PHPUnit_Framework_TestCase {
    
    private $cred;
    private $idLastQuestionnaire;
    private $class = 'ApiClient\\Entity\\Questionnaire';

    public function setUp() {
        $this->cred = new OAuth2ClientCredential(Constants::CLIENT_ID, Constants::CLIENT_SECRET);
    }
    
    public function testQuestionnaire() {
        /*$questionnaire = new Questionnaire();
        
        $this->assertInstanceOf($this->class, $questionnaire);
        
        $this->assertClassHasAttribute('id', $this->class);
        $this->assertClassHasAttribute('title', $this->class);
        $this->assertClassHasAttribute('close', $this->class);
        $this->assertClassHasAttribute('folder_id', $this->class);
        $this->assertClassHasAttribute('public_url', $this->class);*/
    }
    
    public function testCreateQuestionnaire() {
        /*$questionnaire = new Questionnaire();
        $questionnaire->setTitle('Test');
        $questionnaire->setClose(false);
        $result = $questionnaire->create($this->cred);
        
        $this->assertInstanceOf('stdClass', $result);
        
        $this->idLastQuestionnaire = $questionnaire->getId();*/
    }
    
    public function testAllQuestionnaire() {
        /*$questionnaires = Questionnaire::all($this->cred);
        
        $this->assertInternalType('array', $questionnaires);
        $this->assertInstanceOf($this->class, $questionnaires[0]);*/
    }
    
    public function testGetQuestionnaire() {
        /*$questionnaire = Questionnaire::get($this->idLastQuestionnaire, $this->cred);
        
        $this->assertInstanceOf($this->class, $questionnaire);*/
    }
}
