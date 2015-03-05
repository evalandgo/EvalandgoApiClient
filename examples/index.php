<?php
session_start();

use Doctrine\Common\Annotations\AnnotationRegistry;
use ApiClient\OAuth2\OAuth2ClientCredential;
use ApiClient\Entity\Questionnaire;


$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));




$cred = new OAuth2ClientCredential('5c46554s5gf5s5fdgvvs6fdgvs5','kld51vgjqz5e46i5iccvb5796nc');

echo '--- Create ---';
$questionnaire = new Questionnaire();
$questionnaire->setTitle('Test');
$result =$questionnaire->create($cred);
var_dump($questionnaire);

echo '--- Get all ---';
$questionnaires = Questionnaire::all($cred);
var_dump($questionnaires);

echo '--- Get ---';
$questionnaire = Questionnaire::get($questionnaires[1]->getId(), $cred);
var_dump($questionnaire);

echo '--- Update ---';
$questionnaire->setTitle('Test 1');
$result = $questionnaire->update($cred);
var_dump($questionnaire);

echo '--- Delete ---';
$result = $questionnaire->delete($cred);
var_dump($questionnaire);
var_dump($result);

echo '--- Get all ---';
$questionnaire = Questionnaire::all($cred);
var_dump($questionnaires);