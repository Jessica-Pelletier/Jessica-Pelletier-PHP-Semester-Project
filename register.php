<?php
declare(strict_types = 1);

require("database.php");
require("config.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (is_password_valid($password)) {
        // Password is valid, proceed with registration
       
        // Hash the password before saving it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $stmt = $db->prepare("INSERT INTO users (firstname, email, password) VALUES (?, ?, ?)");
        if ($stmt->execute([$firstname, $email, $hashedPassword])) {
            // Registration successful, redirect to the home page
            header("Location: home.php");
            exit; // Make sure to exit to prevent further script execution
        } else {
            echo "Registration failed.";
        }
    } else {
        echo "Password not strong enough. It must be at least 8 characters long and contain at least 1 uppercase letter.";
    }
}

function is_password_valid(string $password): bool {
    return (mb_strlen($password) >= 8 && preg_match('/[A-Z]/', $password));
}
?>