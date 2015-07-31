<?php

session_start();

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

echo 'Hello world';

use ApiClient\Client;

$client = new Client('j12kt54iica78636d93.55470011'/*client_id*/, 'f6zkt54feca12e6ce00.32882853'/*client_secret*/);

/** get **/
//$question = $client->resource('question')->get($questionnaireId, $questionId);

/** list **/
$questions = $client->resource('question')->all(53249);
var_dump($questions);

/** create - post **/
//$question = new Question();
//$question->setTitle('titre');
//$client->resource('question')->create($questionnaireId, $question);

/** update - put **/
//$question->setTitle('titre 2');
//$client->resource('question')->update($questionnaireId, $question);

/** delete **/
//$client->resource('question')->delete($questionnaireId, $question->getId());
