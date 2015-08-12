# EvalandgoApiClient
Client API for Evalandgo

## Installation
In composer.json file, add :
```json
{
    "require": {
        "evalandgo/evalandgo-api-client": "2.0.*"
    }
}
```

## Usage Example
```php
$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$client = new ApiClient\ClientClient('CLIENT_ID', 'CLIENT_SECRET');

$questionnaires = $client->resource('questionnaire')->all();

$questionnaire = $client->resource('questionnaire')->get($questionnaires[0]->getId());

$questionnaire = new \ApiClient\Model\Questionnaire();
$questionnaire->setTitle('questionnaire test');
$questionnaire = $client->resource('questionnaire')->create($questionnaire);

$questionnaire->setTitle('questionnaire test rename');
$questionnaire = $client->resource('questionnaire')->update($questionnaire);

$deleteQuestionnaire = $client->resource('questionnaire')->delete($questionnaire->getId());
```

## How to contribute
To contribute just open a Pull Request with your new code taking into account that if you add new features or modify existing ones you have to document in this README what they do.

## License
EvalandgoApiClient is licensed under [MIT](https://github.com/evalandgo/EvalandgoApiClient/blob/master/LICENSE)