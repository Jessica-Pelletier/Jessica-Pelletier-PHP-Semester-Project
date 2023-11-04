<?php
require("database.php");
require("config.php");
function dd($value)  { 
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function pdo(PDO $pdo, string $sql, array $arguments = null)
{
    if(!$arguments) {
        return $pdo->query($sql);
    }
    $statement = $pdo->prepare($sql);
    $statement->execute($arguments);
    return $statement;
}