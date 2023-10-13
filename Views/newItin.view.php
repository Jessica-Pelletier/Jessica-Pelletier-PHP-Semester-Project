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
    <main class=newitin>
        <div>
        <h1>New Itinerary</h1>
        
        <form action="" method="POST">
            <div class=form>
            <p>Where are you going? <input type="text" name="destination"></p>
            <p>How many days? <input type="text" name="duration"></p> 
            </div><!--Can I change this to an int?-->
            <button class=cancel><a href="home.php">Cancel</a></button>
            <!--<p><a href="newdetail.php"><input type="submit" value="Create"></a></p>--> <!--Make button link to newdetail.php-->
            <button class=create><a href="newdetail.php">Create</a></button>
        </form>
        </div>
        
    </main>
</body>

</html>