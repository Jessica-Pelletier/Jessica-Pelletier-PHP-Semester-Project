<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>New Itinerary</title>
</head>

<body>
    <?php require('partials/logoheader.php') ?>
    <main>
        <h1>New Itinerary</h1>
        <form action="" method="POST">
            <p>Where are you going? <input type="text" name="destination"></p>
            <p>How many days? <input type="text" name="duration"></p> <!--Can I change this to an int?-->
            <p><a href="home.php">Cancel</a></p>
            <p><input type="submit" value="Create"></p> <!--Make button link to newdetail.php-->
            <button><a href="newdetail.php">Create</a></button>
        </form>
    </main>
</body>

</html>