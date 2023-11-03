<?php
$config = include 'config.php';

$databaseConfig = $config['database'];

$dsn = 'mysql:host=' . $databaseConfig['host'] . ';port=' . $databaseConfig['port'] . ';dbname=' . $databaseConfig['dbname'] . ';charset=' . $databaseConfig['charset'];
$username = 'JessicaP';
$password = 'Afterschool'; // Replace with your actual database credentials

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}









// class Database
// {
//     public $connection;
//     public function __construct($config, $username = 'JessicaP', $password = 'Afterschool')
//     {
//         $dsn = 'mysql:' . http_build_query($config, '', ';');

//         $this->connection = new PDO($dsn, $username, $password, [
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//         ]);
//     }


//     public function query($query, $params = [])
//     {

//         $statement = $this->connection->prepare($query);

//         $statement->execute($params);

//         return  $statement;
//     }
// }
