<?php

require_once '../../../vendor/autoload.php';

use Creational\Singleton\DatabaseConnection;
use Creational\Singleton\DatabaseConfig;

$config = new DatabaseConfig('localhost', 3306, 'root', '123');
$instance = DatabaseConnection::getInstance();
$instance->setConfig($config);

var_dump($instance);

echo '-------------------------------------------' . PHP_EOL;

$config = new DatabaseConfig('localhost', 8888, 'admin', '321');
$instance = DatabaseConnection::getInstance();
$instance->setConfig($config);

var_dump($instance);