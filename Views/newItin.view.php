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
        <div class=newitindiv>
            <h1>New Itinerary</h1>

            <div class=form>
                <form action="" method="POST">

                <label for="destination">Where are you going?</label>
                <input type="text" name="destination">
                <label for="duration">How many days?</label>
                <input type="text" name="duration">


            </div><!--Can I change this to an int?-->
            <button class=cancel><a href="home.php">Cancel</a></button>
            <!--<p><a href="newdetail.php"><input type="submit" value="Create"></a></p>--> <!--Make button link to newdetail.php-->
            <button class=create><a href="newdetail.php">Create</a></button>
            </form>
        </div>

    </main>
    <?php require('partials/footer.php') ?>
</body>

</html>