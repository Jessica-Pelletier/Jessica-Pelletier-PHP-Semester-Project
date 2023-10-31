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
        <h1>My Itineraries</h1>
        <a href>View my itineraries</a> <br> <!--TODO: php - add counter for amount of itineraries. -->
        <a href="newItin.php">Create new</a> 
    </main>

    <?php require('partials/aside.php')?>
    <pre><?php var_dump($_POST); ?></pre>
   
</div>

<?php require('partials/footer.php')?>
</body>
</html>