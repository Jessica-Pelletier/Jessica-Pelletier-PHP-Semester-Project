<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <!--Font import below -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Home page</title>
</head>
<body class=home>
<?php require('partials/logoheader.php') ?>


<div class=container>
    <main class=mainhome>
        <h1>My Intineraries</h1>
        <a href>View my itineraries</a> <br> <!--TODO: php - add counter for amount of itineraries. -->
        <a href="newItin.php">Create new</a> 
    </main>

    
    <aside class=asideitem2>
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

</div>
</body>
</html>