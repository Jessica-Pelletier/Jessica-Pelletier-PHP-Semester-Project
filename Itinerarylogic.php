<?php
declare(strict_types=1);
require("database.php");
require("config.php");

$enum_values = [];

// Fetching country values from the 'location' table
$query = "SHOW COLUMNS FROM location LIKE 'country'";
$result = $db->query($query);

if ($result !== false) {
    $enum_str = $result->fetchColumn(1);

    // Try to pass the values of the location ENUM in the database through the form
    preg_match("/^enum\((.*)\)$/", $enum_str, $matches);

    if (!empty($matches[1])) {
        // Trim quotes and spaces from the values
        $enum_values = explode(",", $matches[1]);
        $enum_values = array_map(function ($value) {
            return trim($value, "'\" ");
        }, $enum_values);
      
        // Filter out empty values
        $enum_values = array_filter($enum_values, 'strlen');
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $location = $_POST['location'];
    $days = $_POST['days'];
    $user_id = 1; // Replace with your user authentication logic
    
    // Assuming 'activities' is the name of the activities table
    $query = "SELECT activity FROM activities WHERE country = :country ORDER BY RAND() LIMIT 2";
    $stmt = $db->prepare($query);

    $itinerary = [];
    
    for ($day = 1; $day <= $days; $day++) {
        $stmt->execute(['country' => $location]);
        $activities = $stmt->fetchAll(PDO::FETCH_COLUMN);

        $itinerary[$day] = $activities;
    }

    // Insert the itinerary into the 'itinerary' table
    $stmt = $db->prepare("INSERT INTO itinerary (location, days, user_id) VALUES (?, ?, ?) ");
    
    if ($stmt->execute([$location, $days, $user_id])) {
        // Registration successful, redirect to the home page
        header("Location: newdetail.php");
        exit; // Make sure to exit to prevent further script execution
    } else {
        echo "Registration failed.";
    }
}
?>
