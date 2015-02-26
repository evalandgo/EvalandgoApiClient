<?php

session_start();

// Include the composer autoloader
$loader = require dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('ApiClient\\Test', __DIR__);
