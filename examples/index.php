<?php

session_start();

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

use ApiClient\Client;

//$client = new Client('client_id', 'client_secret');
$client = new Client('j12kt54iica78636d93.55470011', 'f6zkt54feca12e6ce00.32882853');

echo '---- Folder ----';
$folders = $client->resource('folderQuestionnaire')->all();
var_dump($folders);

echo '---- Questionnaire ----';
$questionnaires = $client->resource('questionnaire')->all();
$questionnaire = $client->resource('questionnaire')->get($questionnaires[0]->getId());
var_dump($questionnaire);

$questionnaire = new \ApiClient\Model\Questionnaire();
$questionnaire->setTitle('questionnaire test');
$questionnaire = $client->resource('questionnaire')->create($questionnaire);
var_dump($questionnaire);
$questionnaire->setTitle('questionnaire test rename');
$questionnaire = $client->resource('questionnaire')->update($questionnaire);
var_dump($questionnaire);
$deleteQuestionnaire = $client->resource('questionnaire')->delete($questionnaire->getId());
var_dump($deleteQuestionnaire);

echo '---- Question ----';
$questionnaires = $client->resource('questionnaire')->all();
$questions = $client->resource('question')->all($questionnaires[0]->getId());

/*$question = new \ApiClient\Model\Question();
$question->setTitle('question test');
$question->setType('u');
$question = $client->resource('question')->create($questionnaires[0]->getId(), $question);
var_dump($question);*/

echo '---- Report ----';
$questionnaires = $client->resource('questionnaire')->all();
$reports = $client->resource('report')->all($questionnaires[0]->getId());
var_dump($reports);
$report = $client->resource('report')->get($questionnaires[0]->getId(), $reports[0]->getId());
var_dump($report);

echo '---- Filter ----';
$filters = $client->resource('filterReport')->all($questionnaires[0]->getId(), $reports[0]->getId());
var_dump($filters);
$filter = $client->resource('filterReport')->get($questionnaires[0]->getId(), $reports[0]->getId(), $filters[0]->getId());
var_dump($filter);

/*----------------------
$client->resource('filterReport')->create($questionnaireId, $reportId, $filter);
-----------------------*/

