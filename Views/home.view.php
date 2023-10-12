<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Home page</title>
</head>
<body>
<?php require('partials/logoheader.php') ?>
    <main>
        <h1>My Intineraries</h1>
        <a href>View my itineraries</a> <!--TODO: php - add counter for amount of itineraries. -->
        <a href="newItin.php">Create new</a> 
    </main>
    <aside>
        <nav>
            <p>Hello, User</p> <!-- TODO: PHP -make dynamic -->
            <ul>
                <li><a href="outofscope.php">Profile</a></li>
                <li><a href="outofscope.php">Itineraries</a></li>
                <li><a href="outofscope.php">Settings</a></li>
                <li><a href="outofscope.php">Log out</a></li>
            </ul>

        </nav>

    </aside>
    
</body>
</html>