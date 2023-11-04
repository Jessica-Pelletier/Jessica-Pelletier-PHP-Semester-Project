<?php
$config = include 'config.php';

$databaseConfig = $config['database'];

$dsn = 'mysql:host=' . $databaseConfig['host'] . ';port=' . $databaseConfig['port'] . ';dbname=' . $databaseConfig['dbname'] . ';charset=' . $databaseConfig['charset'];
$username = 'JessicaP';
$password = 'Afterschool'; 

$db = new PDO($dsn, $username, $password);



