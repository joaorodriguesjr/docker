<?php

require __DIR__ . '/../vendor/autoload.php';

$config = [
    'dsn' => 'mysql:host=database;charset=utf8;dbname=' . getenv('DATABASE_NAME'),
    'username' => getenv('DATABASE_USER'),
    'password' => getenv('DATABASE_PASS'),
];
$pdo = new PDO($config['dsn'], $config['username'], $config['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$dataAccess = new App\DataAccess($pdo);
var_dump($dataAccess->generateUUID());
