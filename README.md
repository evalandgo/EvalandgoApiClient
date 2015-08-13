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

## OAuth2 Storage
In order to don't generate a token before each request, this library stores the OAuth2 information in native sessions.

Default storage object : EvalandgoApiClient\OAuth2\Storage\SessionStorage

It is possible to use a custom storage. This class must implement EvalandgoApiClient\OAuth2\Storage\StorageInterface.
```php
$storage = new MyApp\OAuth2\Storage\FileStorage();
$client = new EvalandgoApiClient\Client('CLIENT_ID', 'CLIENT_SECRET', $storage);
```

## Usage Example
```php
session_start();

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$client = new EvalandgoApiClient\Client('CLIENT_ID', 'CLIENT_SECRET');

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