<?php
declare(strict_types = 1);
require("database.php");
require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $location = $_POST['location'];
    $days = $_POST['days'];
    $user_id = 1; // Had to remove constraint in database and explicitly key user_id

$stmt = $db->prepare("INSERT INTO itinerary (location, days, user_id) VALUES (?, ?, ?) ");
if ($stmt->execute([$location, $days, $user_id])) {
    // Registration successful, redirect to the home page
    header("Location: newdetail.php");
    exit; // Make sure to exit to prevent further script execution
} else {
    echo "Registration failed.";
}
}

