<?php
require __DIR__ . '/../vendor/autoload.php';

use Quizz\DebugHandler;
use Quizz\Service\bddService;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$connect = bddService::getConnect();

echo DebugHandler::dump($connect);

\Quizz\DebugHandler::dump($_ENV);

echo "Hello World";