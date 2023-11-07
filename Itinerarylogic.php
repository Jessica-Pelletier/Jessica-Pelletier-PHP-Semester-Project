<?php
declare(strict_types = 1);
require("database.php");
require("config.php");



$query = "SHOW COLUMNS FROM location LIKE 'location'";
$result = $db->query($query);
$enum_str = $result->fetchColumn(1);

// Try to pass the values of the location ENUM in the database through the form
preg_match("/^enum\((.*)\)$/", $enum_str, $matches);
$enum_values = explode(",", $matches[1]);
$enum_values = array_map('trim', $enum_values);


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

